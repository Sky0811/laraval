<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;



use DB;

class OrderlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       //dd($request);
        //实例化操作表
       
       $userid = session()->get('homeuser')->User_id;
        $data = DB::table('orderlist')
        
        ->join('goods','orderlist.Orderlist_goodsid','=','goods.Goods_id')
        ->select('orderlist.*','goods.Goods_body')
        ->where('Orderlist_user_id',"$userid")
        ->get();
        //dd($data);
        //dd($userid);
        //$a = count($ob);
        //dd($a);
        //$b = array[]; 
     //保存搜索条件
        $where = '';
       
        return view('Home.orderlist.index',['data'=>$data]);
         
    }
    public function orderlsta(Request $request,$stat){
        //dd($stat);
        $userid = session()->get('homeuser')->User_id;
        //dd($userid);
        $list = DB::table('orderlist')
       
        ->join('goods','orderlist.Orderlist_goodsid','=','goods.Goods_id')
        ->select('orderlist.*','goods.Goods_body')
        ->where('Orderlist_user_id',"$userid")
        ->get();
        //dd($list);
        $data = $list->where('Orderlist_state',"{$stat}");
        //dd($data);
        return view('Home.orderlist.index',['data'=>$data]);
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
    public function inst(Request $request,$id)
    {
        //
        $orderlist = array();
        $userid = session()->get('homeuser')->User_id;
        //获取购物车信息
        $shop = DB::table('shop')->where('Shop_id',$id)->first();
        //dd($orderlist);
        //dd($data);
        //获取商品表中的信息
        $goodsid = $shop->Shop_gid;
        //dd($goodsid);
       $goods = DB::table('goods')->where('Goods_id',$goodsid)->first();
        //dd($goods);
        //获取收货地址信息
        $addr = DB::table('address')->where('Address_uid',$userid)->get();
        //dd($addr);
        $a = $addr->where('Address_default',2)->first();
        if($a == null){
            return redirect('home1/address');
        }else{
        //dd($address->Address_consignee);
        $orderlist['Orderlist_goodsid'] = $goods->Goods_id;
        $orderlist['Orderlist_goodsname'] = $goods->Goods_name;
        $orderlist['Orderlist_goodspic'] = $goods->Goods_pic;
        $orderlist['Orderlist_user_id'] = $userid;
        $orderlist['Orderlist_state'] = 0;
        $orderlist['Orderlist_goodsnum'] = $shop->Shop_num;
        $orderlist['Orderlist_pricesum'] = $shop->Shop_price;
         $orderlist['Orderlist_total'] = $shop->Shop_price;
        $orderlist['Orderlist_price'] = $shop->Shop_price;
        $orderlist['Orderlist_name'] = $a->Address_consignee;
    $orderlist['Orderlist_tel'] = $a->Address_consignee_phone;
        $orderlist['Orderlist_time'] = time();
        $orderlist['Orderlist_od_number'] = time().rand(100,999);
        $number = $orderlist['Orderlist_od_number'];
        //dd($orderlist['Orderlist_od_number']);
        $row = DB::table('orderlist')->insertGetId($orderlist);
            //dd($row);
        if($row > 0){
            $ob = DB::table('orderlist')->where('Orderlist_od_number',$number)->first();
            //dd($ob);
            return view('Home.payfor.index',['ob'=>$ob,'a'=>$a]);
        }else{
            return redirect('home1/orderlist')->with('error','结算失败');
        }
    }
        




        

        //dd($userid);
     
      
        //dd($orderlist);
         // $payid = $orderlist->Orderlist_payid;
         // //dd($payid);
         //  $pay = DB::table('pay')->where('Pay_id',$payid)->get();
         
         // $dilivery = $orderlist->Orderlist_dilivery;
         // $dilivry = DB::table('dilivery')->where('Dilivery_id',$dilivery)->get();
         // //dd($dilivry);
         // $userid = $orderlist->Orderlist_user_id;
         // $address = DB::table('address')->where('Address_uid',$userid)->get();

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ordlid)
    {
        //
        dd($ordlid);
          $orderlist = DB::table('orderlist')->where('Orderlist_id',$ordlid)->get()->first();
        $ob = DB::table('orderlist')->where('Orderlist_id',$ordlid)->get();
        //dd($orderlist);
        
         
        
         //dd($dilivry);
         $userid = $orderlist->Orderlist_user_id;
         $address = DB::table('address')->where('Address_uid',$userid)->get();
     
            // ->crossJoin('address')
            // ->where('Orderlist_id',$ordlid)
            // ->get();
            // Orderlist_payid
            // Orderlist_dilivery

        //dd($ob);
        return redirect('/home1/orderlist',['ob'=>$ob,'address'=>$address]);


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
        //
        //dd($id);
       $userid = session()->get('homeuser')->User_id;
        //dd($userid);
        // $list = DB::table('address')->where('Address_uid',$userid)->get();
        // $a = $list->where('Address_default','=','2')->first();
        // //dd($a);
       //dd($a);
         //$ob = DB::table('orderlist')->where('Orderlist_id',$id)->get();
        
        $data['Orderlist_state'] = 1;
        // dd($data);
        // $data = array();
        // $time = time();
        // $data['Orderlist_time'] = $time;
       
        $row = DB::table('orderlist')->where('Orderlist_id',$id)->update($data);

        // dd($row);
          if($row>0){

            return redirect('/home2/orderlist/state/'.$id)->with('msg','支付成功');
        }else{
            return redirect('/home2/orderdetail/'.$id)->with('error','结算失败');
        }

    }
      public function doupdate($id)
    {
        //
        //dd($id);
       $userid = session()->get('homeuser')->User_id;
        //dd($userid);
        // $list = DB::table('address')->where('Address_uid',$userid)->get();
        // $a = $list->where('Address_default','=','2')->first();
        // //dd($a);
       //dd($a);
         //$ob = DB::table('orderlist')->where('Orderlist_id',$id)->get();
        
        $data['Orderlist_state'] = 1;
        // dd($data);
        // $data = array();
        // $time = time();
        // $data['Orderlist_time'] = $time;
       
        $row = DB::table('orderlist')->where('Orderlist_id',$id)->update($data);

        // dd($row);
          if($row>0){

            return redirect('/home2/orderlist/state/1')->with('msg','支付成功');
        }else{
            return redirect('/home2/orderdetail/0')->with('error','结算失败');
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
        $row = DB::table('orderlist')->where('Orderlist_id',$id)->delete();
        if($row>0){
            return redirect('home1/orderlist')->with('msg','取消成功');
        }else{
            return redirect('home1/orderdetail/'.$id)->with('error','取消失败');
        }
    }

    public function rgood($id)
    {
       // dd($id);
        $data['Orderlist_state'] = 4;
        //dd($data);
        $row = DB::table('orderlist')->where('Orderlist_id',$id)->update($data);
        if($row > 0){
            return redirect('home2/orderlist/state/4')->with('msg','已退货，请耐心等待，店家正在处理');
        }else{
            return redirect('home2/orderlist/state/4')->with('error','退货失败');
        }
    }
        public function sgood($id)
    {
       // dd($id);
        $data['Orderlist_state'] = 3;
        //dd($data);
        $row = DB::table('orderlist')->where('Orderlist_id',$id)->update($data);
        if($row > 0){
            return redirect('home2/orderlist/state/3')->with('msg','收货成功，请评价');
        }else{
            return redirect('home2/orderlist/state/3')->with('error','收货失败来，再来一次');
        }
    }
    
    
}
    

