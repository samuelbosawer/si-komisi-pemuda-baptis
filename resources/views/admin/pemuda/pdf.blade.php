<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF - Data Pemuda</title>
    <style>
        table, tr, th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            font-weight: 600;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="text-center">
                <h1>{{$title}} </h5>
            </div>
        </div>

        <div class="row">
            <div class="">
                <div class="">
                    <table class="">
                        <tr>
                            <th width="1%">No</th>
                            {{-- <th>Foto</th> --}}
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>TTL</th>
                            <th>Nomor HP</th>
                            <th>Usia</th>
                            <th>Alamat</th>
                            <th>Gereja</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        @forelse ($datas as $data)
                            <tr class="text-center">
                                <td>{{ ++$i }}</td>
                                {{-- <td class="" width="100px">
                                    <img src="{{ asset($data->foto) }}" alt=""
                                        class="">
                                </td> --}}
                                <td>

                                        {{ $data->nama_depan . ' ' . $data->nama_belakang . ' ' . $data->belakang }}
                                </td>

                                <td>
                                    {{
                                        $data->jenis_kelamin
                                    }}
                                </td>


                                <td>
                                    {{
                                        $data->tempat_lahir.', '.strftime('%d %B %Y', strtotime($data->tanggal_lahir));

                                    }}
                                </td>


                                <td>
                                    {{
                                        $data->nomor_hp
                                    }}
                                </td>


                                <td>
                                    {{
                                        $data->usia
                                    }}
                                </td>


                                <td>
                                    {{
                                        $data->alamat
                                    }}
                                </td>


                                <td>
                                    {{ $data->gereja->nama_gereja }}
                                </td>

                               >

                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">
                                    No data . . .
                                </td>
                            </tr>
                        @endforelse


                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
