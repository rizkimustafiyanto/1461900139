<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Pengumuman</title>
    <style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    thead {
        background-color: #f2f2f2;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .tambah{
        padding: 8px 16px ;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    {{-- <a class="tambah" href="{{route( 'mahasiswa.create')}}">Tambah Data </a> --}}
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>SLUG</th>
                <th>Isi</th>
                <th>Create</th>
                <th>Update</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
                @foreach ($tb_pengumuman as $tp)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$tp->judul}}</td>
                <td>{{$tp->slug}}</td>
                <td>{{$tp->isi}}</td>
                <td>{{$tp->created_at}}</td>
                <td>{{$tp->updated_at}}</td>
                <td>
                    <a href="">Edit </a>
                    <a href=""> Hapus</a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>