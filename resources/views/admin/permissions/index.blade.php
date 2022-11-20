@extends('layouts.master')



@section('conteudo')

<div class="card" style="padding: 20px">
    <form id="form-validation">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label control-label">Nome *</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="inputRequired" placeholder="Nome da permissão">
            </div>
            <div class="col-sm-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<div class="card p-3">
    <table id="data-table" class="table">
        <thead>
            <tr>
                <th>tt1</th>
                <th>tt2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>hei</td>
                <td>hei3</td>
            </tr>
            <tr>
                <td>hei</td>
                <td>hei3</td>
            </tr>
            <tr>
                <td>hei</td>
                <td>hei3</td>
            </tr>
            <tr>
                <td>hei</td>
                <td>hei3</td>
            </tr>
            <tr>
                <td>hei</td>
                <td>hei3</td>
            </tr>
            <tr>
                <td>hei</td>
                <td>hei3</td>
            </tr>
            <tr>
                <td>hei</td>
                <td>hei3</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>tt1</th>
                <th>tt2</th>
            </tr>
            </tr>
        </tfoot>
    </table>
</div>

@endsection


@section('js')
<script>
    $('#data-table').DataTable();





    $( "#form-validation" ).validate({
    ignore: ':hidden:not(:checkbox)',
    errorElement: 'label',
    errorClass: 'is-invalid',
    validClass: 'is-valid',
    rules: {
        inputRequired: {
            required: true
        },
        inputMinLength: {
            required: true,
            minlength: 6
        },
        inputMaxLength: {
            required: true,
            minlength: 8
        },
        inputUrl: {
            required: true,
            url: true
        },
        inputRangeLength: {
            required: true,
            rangelength: [2, 6]
        },
        inputMinValue: {
            required: true,
            min: 8
        },
        inputMaxValue: {
            required: true,
            max: 6
        },
        inputRangeValue: {
            required: true,
            max: 6,
            range: [6, 12]
        },
        inputEmail: {
            required: true,
            email: true
        },
        inputPassword: {
            required: true
        },
        inputPasswordConfirm: {
            required: true,
            equalTo: '#password'
        },
        inputDigit: {
            required: true,
            digits: true
        },
        inputValidCheckbox: {
            required: true
        }
    }
});
</script>
@endsection
