<x-backend.layouts.admin>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Add New Student Informations</h4>
                        <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                    </div>
                    <div class="tab-inn">
                        <form>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" value="" class="validate" required>
                                    <label class="">First name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" value="" class="validate" required>
                                    <label class="">Last name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="number" value="" class="validate" required>
                                    <label class="">Phone number</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="email" class="validate" value="" required>
                                    <label class="">Email is</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" value="" class="validate">
                                    <label class="">City</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" value="" class="validate">
                                    <label class="">Country</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="password" value="" class="validate">
                                    <label class="">Password</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="password" value="" class="validate">
                                    <label class="">Confirm Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="" id="" class="validate">
                                        <option value="Male">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Male">Female</option>
                                        <option value="Male">Others</option>
                                    </select>


                                </div>
                                <div class="input-field col s6">
                                    <select name="" id="" class="validate">
                                        <option>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <div class="btn admin-upload-btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Profile image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.admin>