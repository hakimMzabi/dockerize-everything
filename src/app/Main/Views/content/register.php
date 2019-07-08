<div class="container">
    <form action="/register" method="post">
        <div class="form-group">
            <label for="input-first-name">First name</label>
            <input type="text" class="form-control" name="first-name" id="input-first-name" placeholder="First name">
        </div>
        <div class="form-group">
            <label for="input-last-name">Last name</label>
            <input type="text" class="form-control" name="last-name" id="input-last-name" placeholder="Last name">
        </div>
        <div class="form-group">
            <label for="input-email">Email address</label>
            <input type="email" class="form-control" name="email" id="input-email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="input-password">Password</label>
            <input type="password" class="form-control" name="password" id="input-password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="input-password-confirmation">Password Confirmation</label>
            <input type="password" class="form-control" name="password-confirmation" id="input-password-confirmation"
                   placeholder="Password Confirmation">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>