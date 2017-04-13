<?php

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders')->delete();
        \DB::table('order_details')->delete();

        $orders = File::get("database/data/orders.json");
        $data = json_decode($orders);
        foreach ($data as $obj) {
            Order::create([
                'order_id'          => $obj->order_id,
                'order_user_id'     => $obj->order_user_id,
                'address_id'        => $obj->address_id,
                'comment'           => $obj->comment,
                'status'            => $obj->status,
                'delivery_date'     => $obj->delivery_date,
            ]);
        }

        $orderDetails = File::get("database/data/order_details.json");
        $data = json_decode($orderDetails);
//        dd($data);
        foreach ($data as $obj) {
//            dd($obj);
            OrderDetail::create([
                'order_details_id'          => $obj->order_details_id,
                'order_details_order_id'    => $obj->order_details_order_id,
                'order_product_id'          => $obj->order_product_id
            ]);
        }
    }
}
