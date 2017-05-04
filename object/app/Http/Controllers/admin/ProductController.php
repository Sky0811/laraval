<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('product')->get();
        return view('admin.product.index',['list'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('product')->get();
        if(count($data)>9){
            return redirect('admin1/product')->with('error','图片数量不能超过10张！！');
        }
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Product_name' => 'required|string|max:8',
            'Product_describe' => 'max:15',
        ],$this->messages());
        $list=$request->except('_token');
        // dd($list);
        //判断是否有文件上传
        if($request->hasFile('Product_img')){
            // 判断上传的文件是否有效
            if($request->file('Product_img')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('Product_img');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // dd($ext);
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                // dd($picname);
                $data->move('admin/upload/',$picname);
                if($data->getError()>0){
                    echo '上传失败';
                }else{
                    $img = Image::make('admin/upload/'.$picname);
                    $img->resize(160, 160, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                    });
                    $img->save('admin/upload/s_'.$picname);
                    $list['Product_img']=$picname;
                    // dd($list['Net_logo']);
                }
            }
        }
        $row=DB::table('product')->insertGetId($list);
        if($row){
            return redirect('admin1/product')->with('msg','添加成功');
        }else{
            return redirect('admin1/product')->with('error','添加失败');
        }
    }
    public function messages(){
        return [
        'Product_name.required' => '请输入商品名',
        'Product_name.max' => '产品名称最多输入8个字符',
        'Product_describe.max'  => '产品描述最多输入15个字符'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('product')->where('Product_id',$id)->first();
        return view('admin.product.edit',['list'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = $request->only('Product_img','Product_name','Product_describe');
        //判断是否有文件上传
        if($request->hasFile('Product_img')){
            // dd(111111);
            // 判断上传的文件是否有效
            if($request->file('Product_img')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('Product_img');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // dd($ext);
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                // dd($picname);
                $data->move('admin/upload/',$picname);
                if($data->getError()>0){
                    echo '上传失败';
                }else{
                    $img = Image::make('admin/upload/'.$picname);
                    $img->resize(160, 160, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                    });
                    $img->save('admin/upload/s_'.$picname);
                    $list['Product_img']=$picname;
                    // dd($list['Net_logo']);
                }
            }
        }else{
            $picname=$request->input('Product_img1');
            // dd($picname);
            $list['Product_img']=$picname;
        }
        
        $row=DB::table('product')->where('Product_id',$id)->update($list);
        if($row){
            return redirect('admin1/product')->with('msg','修改成功');
        }else{
            return redirect('admin1/product')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=DB::table('product')->where('Product_id',$id)->delete();
        if($row){
            return redirect('admin1/product')->with('msg','删除成功');
        }else{
            return redirect('admin1/product')->with('error','删除失败');
        }
    }
}
