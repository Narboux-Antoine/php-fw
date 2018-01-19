<form>

    <label for="inputFirstName"></label>
    <input type="text" name="firstName" id="inputFirstName" class="form-control" placeholder="firstName" required>

    <label for="inputLastName"></label>
    <input type="text" name="LastName" id="inputLastName" class="form-control" placeholder="LastName" required>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

    <label for="inputRepeatPassword" class="sr-only">Repeat Password</label>
    <input type="password" name="password" id="inputRepeatPassword" class="form-control" placeholder="Password" required>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?= $_email ?>">

    <label for="inputPhone" class="sr-only">Phone Number</label>
    <input type="text" name="phone" id="inputPhone" class="form-control" placeholder="Phone Number">


    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

</form>