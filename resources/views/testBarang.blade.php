<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
      <thead>
        <tr>
          <th>Kode Barang</th>
          <th>Outlet</th>
          <th>Kategori</th>
          <th>Kode PN</th>
          <th>Merek</th>
          <th>Nama Barang</th>
          <th>Stock Masuk</th>
          <th>Stock Keluar</th>
          <th>Sisa Stock</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tampilBarang as $tp_brg)
        <tr>
          <td>{{$tp_brg->kode_master}}</td>
          <td>{{$tp_brg->kode_outlet}}</td>
          <td>{{$tp_brg->kategori}}</td>
          <td>{{$tp_brg->kode_pn}}</td>
          <td>{{$tp_brg->merek}}</td>
          <td>{{$tp_brg->nama_barang}}</td>
          <td>{{$tp_brg->stock_masuk}}</td>
          <td>{{$tp_brg->stock_keluar}}</td>
          <td>{{$tp_brg->sisa_stock}}</td>
          <td>{{$tp_brg->keterangan}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
