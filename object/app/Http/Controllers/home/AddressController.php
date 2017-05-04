<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $addruid = session()->get('homeuser')->User_id;
        //dd($addruid);
        $ob = DB::table('address')->where('Address_uid',$addruid)->get();
        //dd($ob);
        return view('Home.address.index',['ob'=>$ob]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
           
             $data = $request->except('_token');
             // dd($data);

          $cityid = $request->city;
          //dd($cityid); 
         $province = DB::table('district')->where('id',$cityid[0])->first();
          // dd($province);
         $city = DB::table('district')->where('id',$cityid[1])->first();
        $county = DB::table('district')->where('id',$cityid[2])->first();
         $data['Address_province']=  $province->name;
        
         $data['Address_city']=  $city->name ;
         $data['Address_county']=  $county->name ;
         unset($data['city']);
        //dd($data);
         $uid = session('homeuser')->User_id;
         $data['Address_uid'] = $uid;
         //dd($uid);
        $list = DB::table('address')->insertGetId($data);
        $ob = DB::table('address')->where('Address_uid',$uid)->get();
        return view('Home.address.index',['ob'=> $ob]);

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
        //
        //dd($id);
        $ob = DB::table('Address')->where('Address_id',$id)->first();
        //dd($ob);
        return view('Home.address.edit',['ob'=>$ob]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        // dd($id);
        $data = $request->only('Address_consignee','Address_consignee_phone','Address_detail');
        //dd($data);
       
        // dd($data);
         $cityid = $request->city;
          //dd($cityid); 
         $province = DB::table('district')->where('id',$cityid[0])->first();
          //dd($province);
         $city = DB::table('district')->where('id',$cityid[1])->first();
        $county = DB::table('district')->where('id',$cityid[2])->first();
        //dd($county);
         $data['Address_province']=  $province->name;
        
         $data['Address_city']=  $city->name ;
         $data['Address_county']=  $county->name ;
        $data['Address_default'] = 1;
        //dd($data);
        $data['Address_uid']=session('homeuser')->User_id;
    // dd($data);
        $row = DB::table('address')->where('Address_id',$id)->update($data);
        // dd($row);
        if($row > 0){
            return redirect('home2/address');
        }else{
            return redirect('home2/address/'.$id.'/edit');
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
        //
        //dd($id);
        $ob = DB::table('address')->where('Address_id',$id)->delete();
        return redirect('/home2/address');
    }
    public function defaut($id)
    {
         $addr['Address_default'] = 1;
        $rows = DB::table('address')->where('Address_default',2)->update($addr);
        //dd($rows);
        $addr['Address_default'] = 2; 
        // dd($addr);
        $row = DB::table('address')->where('Address_id',$id)->update($addr);
        //dd($row);
         if($row>0){
            return redirect('home2/address')->with('msg','修改成功');
        }else{
            return redirect('home2/address')->with('error','修改失败');
        }
    }
    public function fal($id)
    {
       $addr['Address_default'] = 1;
        
        $row = DB::table('address')->where('Address_id',$id)->update($addr);
        //dd($row);
         if($row>0){
            return redirect('home2/address')->with('msg','修改成功');
        }else{
            return redirect('home2/address')->with('error','修改失败');
        }  
    }
    
}
