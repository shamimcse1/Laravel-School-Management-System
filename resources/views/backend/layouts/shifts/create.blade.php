<x-backend.layouts.admin>
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{route('admin.index')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="{{route('admin.index')}}"> Dashboard</a>
            </li>

            <li class="page-back"><a href="{{route('shifts.index')}}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Add New Shift Informations</h4>

                    </div>
                    <div class="tab-inn">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('shifts.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="name" value="" class="validate" required>
                                    <label class="">Shift Name</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input"></i>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.admin>