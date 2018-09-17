<form id="login" action="" method="POST">
    {{ csrf_field() }}
    <h2>{{ trans('login.title.login') }}</h2>
    <fieldset>
        <div class="form-group">
            <label for="email">{{ trans('login.form.label.email') }}</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">{{ trans('login.form.label.password') }}</label>
            <input type="password" name="password" class="form-control" id="pwd">
        </div>Password:
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>
