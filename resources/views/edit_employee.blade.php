<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<form  method="post" enctype="multipart/form-data" action = "{{route("employees.update", $employee->id)}}">
    @csrf
    @method("PUT")
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Employee Name</label>
            <input type="name" class="form-control"  placeholder="Name" name="name" value="{{old('name', $employee->name)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Employee Surname</label>
            <input type="name" class="form-control"  placeholder="Surname" name="surname" value="{{old('surname', $employee->surname)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Employee Position</label>
            <input type="name" class="form-control"  placeholder="position" name="position" value="{{old('position', $employee->position)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Employee Phone</label>
            <input type="name" class="form-control"  placeholder="phone" name="phone" value="{{old('phone', $employee->phone)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Employee Status</label>
            <input type="name" class="form-control"  placeholder="status" name="is_hired" value="{{old('is_hired', $employee->is_hired)}}">
        </div>
    </div>
    <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<form>
    <button formaction="127.0.0.0:8000/employeelist"> go back</button>
</form>
</html>
