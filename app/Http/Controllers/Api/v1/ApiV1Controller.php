<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\ApiV1;
use Illuminate\Http\Request;


class ApiV1Controller extends Controller
{

    public function saveUrl(Request $req)
    {
        $url = filter_var($req->form_long_url, FILTER_SANITIZE_URL);
        $encodeUrl = rawurlencode($url);
        $substr = substr(md5($encodeUrl), 0, 8);

        if (!$this->searchLongUrlHash($substr)) {
            $shortUrl = random_int(10000, 99999);
            $obj = new ApiV1();
            $obj->long_url = $encodeUrl;
            $obj->long_url_hash = $substr;
            $obj->short_url = $shortUrl;
            $result = $obj->save();

            $domainName = 'http://task-api-la-pg.pro/';

            if ($result) {
                $message = ["Result" => "Data has been saved",
                    "Short Url" => "$domainName$shortUrl",
                ];
                return response()->json($message, 200);
//                return view('api-short-url', ["domainName" => $domainName.$shortUrl]); // for test in View
            } else {
                $message = ["Result" => "Save error"];
                return response()->json($message, 500);
            }
        }
    }


    public function searchLongUrlHash($substr)
    {
        if (ApiV1::where('long_url_hash', $substr)->exists()) {
            echo json_encode(["Result" => "Url exists"]);
            return true;
        } else {
            return false;
        }
    }


    public function searchLongUrl($req)
    {
        $findShort = ApiV1::where('short_url', $req)->get(['long_url']);
        $url_arr = json_decode($findShort, true);
        $url_str = $url_arr[0]['long_url'];
        $url_decode = rawurldecode($url_str);

        return redirect($url_decode, '301');
    }

}
