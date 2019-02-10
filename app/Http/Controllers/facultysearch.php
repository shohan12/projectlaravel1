<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class facultysearch extends Controller
{
    
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('email')
         ->where('username', 'like', '%'.$query.'%')
         
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('email')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->username.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->room.'</td>
         

         
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
