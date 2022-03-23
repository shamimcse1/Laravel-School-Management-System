<x-backend.layouts.admin>
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{route('admin.index')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="{{route('admin.index')}}"> Dashboard</a>
            </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <a class="btn btn-primary" href="{{route('assign_subjects.create')}}">Add New</a>

                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php
                                    $sl = 0;
                                    @endphp
                                    @foreach ($assign_subjects as $assign_subject)
                                    <td>{{++$sl}}</td>
                                    <td>{{$assign_subject->name}}</td>
                                    <td>
                                        <a href="{{route('assign_subjects.edit', $assign_subject->id)}}" class="ad-st-view">Update</a>

                                        <form style="display: inline;" action="{{route('assign_subjects.destroy', $assign_subject->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Are you want to delete?')" class="ad-st-view" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-backend.layouts.admin>