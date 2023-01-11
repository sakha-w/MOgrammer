<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css" />


</head>

<body>
    <div class="card-body">
                <table class="table table-bordered" id="datatable">
                    <thead class="border-b bg-blue-800">
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                            <th>Email</th>
                            <th>password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user )
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $user->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $user->name }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->email }}
                            </td>

                            <td>
                                <a class="inline-block border border-gray-700 bg-gray-700 text-dark rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" href="{{ route('user.edit', $user->id) }}">
                                    Edit
                                </a>

                                <a class="inline-block border border-gray-700 bg-blue-700 text-dark rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" href="{{ route('user.infoPengguna', $user->id) }}">
                                    Show
                                </a>
                                <!-- <a class="inline-block border border-gray-700 bg-blue-700 text-dark rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" href="{{ route('user.delete', $user->id) }}">
                                    Delete
                                </a> -->
                                <form class="inline-block" action="{{ route('user.delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button class="border border-red-500 bg-red-500 text-dark rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr class="bg-white border-b">
                        @endforeach
                    </tbody>
                    </tbody>
                </table>
            </div>





    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
</body>

</html>
