<?php

namespace App\Http\Controllers;

use App\DataTables\AdminDataTable;
use App\Exports\AdminsExport;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Controllers\AppBaseController;
use App\Imports\AdminsImport;
use App\Repositories\AdminRepository;
use Flash;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestController extends AppBaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function soal1()
    {
        $number_before = 0;
        $number_current = 1;

        print("$number_before $number_current");

        for ($i = 0; $i < 12; $i++) {
            $output = $number_current + $number_before;
            print(" $output");

            $number_before = $number_current;
            $number_current = $output;
        }
    }

    public function soal2()
    {
        for ($i = 1; $i < 10; $i++) {
            print("y: $i |");
            for ($j = 9; $j > 0; $j--) {
                print(" x:$j");
            }
            print("<br>");
        }
    }

    public function soal3()
    {
        return view('tests.soal3');
    }

    public function soalQuery()
    {
        DB::statement("SET SQL_MODE=''");

        $soal1 = "SELECT
            mar_mas_tra_order.id,
            mar_mas_customer.name AS customer_name,
            mar_mas_customer.address,
            mar_mas_customer.city,
            mar_mas_customer.province,
            mar_mas_marketplace.store_name,
            mar_mas_expedition.name AS expedition_name,
            order_detail.total_price AS total_price
        FROM
            mar_mas_tra_order
        LEFT JOIN mar_mas_customer ON mar_mas_customer.id = mar_mas_tra_order.customer_id
        LEFT JOIN mar_mas_marketplace ON mar_mas_marketplace.id = mar_mas_tra_order.marketplace_id
        LEFT JOIN mar_mas_expedition ON mar_mas_expedition.id = mar_mas_tra_order.expedition_id
        INNER JOIN(
            SELECT mar_mas_tra_order_detail.*,
                mar_mas_item.price,
                SUM(
                    mar_mas_tra_order_detail.qty * mar_mas_item.price
                ) AS total_price
            FROM
                mar_mas_tra_order_detail
            INNER JOIN mar_mas_item ON mar_mas_item.id = mar_mas_tra_order_detail.item_id
            GROUP BY
                mar_mas_tra_order_detail.order_id
        ) AS order_detail
        ON
        order_detail.order_id = mar_mas_tra_order.id";

        $mar_mas_tra_order_detail = "
            SELECT 
                mar_mas_tra_order_detail.*,
                mar_mas_item.price, 
                SUM(mar_mas_tra_order_detail.qty * mar_mas_item.price) AS total_price
            FROM mar_mas_tra_order_detail
            INNER JOIN mar_mas_item ON mar_mas_item.id = mar_mas_tra_order_detail.item_id
            GROUP BY
                mar_mas_tra_order_detail.order_id
        ";
        $soal1 = DB::raw("
            SELECT 
                mar_mas_tra_order.id,
                mar_mas_customer.name AS customer_name,
                mar_mas_customer.address,
                mar_mas_customer.city,
                mar_mas_customer.province,
                mar_mas_marketplace.store_name,
                mar_mas_expedition.name AS expedition_name,
                order_detail.total_price AS total_price
            FROM mar_mas_tra_order
            LEFT JOIN mar_mas_customer ON mar_mas_customer.id = mar_mas_tra_order.customer_id
            LEFT JOIN mar_mas_marketplace ON mar_mas_marketplace.id = mar_mas_tra_order.marketplace_id
            LEFT JOIN mar_mas_expedition ON mar_mas_expedition.id = mar_mas_tra_order.expedition_id
            INNER JOIN (" . $mar_mas_tra_order_detail . ") AS order_detail ON order_detail.order_id = mar_mas_tra_order.id
        ");
        // return DB::select($soal1);
        return $soal1;
    }

    public function soalQuery2()
    {
        DB::statement("SET SQL_MODE=''");

        $soal2 = DB::raw("
            SELECT
                mar_mas_item.*,
                mar_mas_tra_order_detail.qty,
                sum(mar_mas_tra_order_detail.qty) AS qty_sold
            FROM
                mar_mas_tra_order_detail
            LEFT JOIN mar_mas_item ON mar_mas_item.id = mar_mas_tra_order_detail.item_id  
            GROUP BY
                mar_mas_tra_order_detail.item_id
            ORDER BY sum(mar_mas_tra_order_detail.qty) DESC
        ");
        return DB::select($soal2);
        return $soal2;
    }

    public function soalQuery3()
    {
        DB::statement("SET SQL_MODE=''");

        $result = "
            SELECT
                mar_mas_item.brand,
                SUM(
                    COALESCE(
                        (order_detail.qty_total_sold),
                        0
                    )
                ) AS qty_total_sold
            FROM
                mar_mas_item
            LEFT JOIN(
                SELECT mar_mas_tra_order_detail.*,
                    SUM(mar_mas_tra_order_detail.qty) AS qty_total_sold
                FROM
                    mar_mas_tra_order_detail
                GROUP BY
                    mar_mas_tra_order_detail.item_id
            ) AS order_detail
            ON
                order_detail.item_id = mar_mas_item.id
            GROUP BY
                mar_mas_item.brand
        ";

        $mar_mas_tra_order_detail = "
            SELECT 
                mar_mas_tra_order_detail.*,
                SUM(mar_mas_tra_order_detail.qty) AS qty_total_sold
            FROM
                mar_mas_tra_order_detail
            GROUP BY
                mar_mas_tra_order_detail.item_id
        ";
        $soal1 = DB::raw("
            SELECT 
                mar_mas_item.brand,
                SUM(COALESCE((order_detail.qty_total_sold), 0)) AS qty_total_sold
            FROM
                mar_mas_item
            LEFT JOIN (" . $mar_mas_tra_order_detail . ") AS order_detail ON order_detail.item_id = mar_mas_item.id
            GROUP BY
                mar_mas_item.brand
        ");
        // return DB::select($soal1);
        return $soal1;
    }

    public function soalQuery4()
    {
        DB::statement("SET SQL_MODE=''");

        $result = "
            SELECT
                mar_mas_expedition.*,
                tra_order.count_expedition AS count_order
            FROM
                mar_mas_expedition
            LEFT JOIN(
                SELECT mar_mas_tra_order.*,
                    COUNT(
                        mar_mas_tra_order.expedition_id
                    ) AS count_expedition
                FROM
                    mar_mas_tra_order
                GROUP BY
                    mar_mas_tra_order.expedition_id
            ) AS tra_order
            ON
                tra_order.expedition_id = mar_mas_expedition.id
        ";

        $mar_mas_tra_order = "
            SELECT 
                mar_mas_tra_order.*,
                COUNT(mar_mas_tra_order.expedition_id) AS count_expedition
            FROM
                mar_mas_tra_order
            GROUP BY
                mar_mas_tra_order.expedition_id
        ";
        $soal1 = DB::raw("
            SELECT 
                mar_mas_expedition.*,
                tra_order.count_expedition AS count_order
            FROM
                mar_mas_expedition
            LEFT JOIN (" . $mar_mas_tra_order . ") AS tra_order ON tra_order.expedition_id = mar_mas_expedition.id
        ");
        // return DB::select($soal1);
        return $soal1;
    }
}
