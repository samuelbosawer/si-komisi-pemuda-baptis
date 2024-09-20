<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF - Data Jadwal Ibadah</title>
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
                    <table class="" style="width: 100%">
                        <tr>
                            <th width="1%">No</th>
                            <th>Tanggal</th>
                            <th>Tempat Ibadah</th>
                            <th>Pelayan Firman</th>
                            <th>Doa Syafaat</th>
                            <th>Doa Syukur</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        @forelse ($datas as $data)
                            <tr class="text-center">
                                <td>{{ ++$i }}</td>


                                <td>
                                    {{
                                       strftime('%d %B %Y', strtotime($data->tanggal));

                                    }}
                                </td>

                                <td>
                                    {{
                                        $data->tempat_ibadah
                                    }}
                                </td>




                                <td>
                                    {{
                                        $data->pelayan_firman
                                    }}
                                </td>



                                <td>
                                    {{
                                        $data->doa_syafaat
                                    }}
                                </td>

                                <td>
                                    {{
                                        $data->doa_syukur
                                    }}
                                </td>


                                <td>
                                    {{
                                        $data->status
                                    }}
                                </td>

                                <td>
                                    {{
                                        $data->keterangan
                                    }}
                                </td>




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
