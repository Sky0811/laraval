<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shopid(Request $request)
    {
        $list = $request->except('_token','num');
        $ids=$list['shopid'];
        $id = $ids[0];
        $id=intval($id);
        // dd($id);
        //  $orderlist = DB::table('orderlist')->where('Orderlist_id',$ordlid)->get()->first();
        // $ob = DB::table('orderlist')->where('Orderlist_id',$ordlid)->get();
        //dd($orderlist);
        $shop = DB::table('shop')->where('Shop_id',$id)->first();
        //dd($shop);
         //dd($dilivry);
         $userid = $shop->Shop_uid;
         $addr = DB::table('address')->where('Address_uid',$userid)->get();
         $address = $addr->where('Address_default',2)->first();
         if($address == null){
            return redirect('home2/address')->with('msg','请设置默认收货地址');
         }
         $goodsid = $shop->Shop_gid;
         //dd($goodsid);
         $goods = DB::table('goods')->where('Goods_id',$goodsid)->get();
         
        //dd($goods);
         return view('Home.buy.index',['shop'=>$shop,'address'=>$address,'goods'=>$goods]);
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
        //dd($id);
          $userid = session()->get('homeuser')->User_id;
          $addr = DB::table('address')->where('Address_uid',$userid);
          //dd($addr);
          $a = $addr->where('Address_default',2)->first();
          //dd($a);
          if($a == null)
          { 
            return redirect('home1/address');
          }else{
             $ob = DB::table('orderlist')->where('Orderlist_id',$id)->first();

             return view('Home.payfor.index',['ob'=>$ob,'a'=>$a]);

          }
         
        
            //dd($ob);
            //dd($ob);
            
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
    }
    public function date($id)
    {
        //dd($id);
        $state = array();
        $state['Orderlist_state'] = 1;
        $row = DB::table('orderlist')->where('Orderlist_id',$id)->update($state);
        if($row > 0){
                return redirect('home2/orderdetail/'.$id);
        }else{
            return redirect("home2/orderdetail/".$id)->with('error','结算失败');
        }
        
    }
}
