<div class="container">
<?php
if (isset($isError)) {
    
} else {
    $isError = false; 
}
?>


    <h1 class="align-center">Formularz rejestracji użytkownika</h1>
<div class="form">    
    <form method="post">
        <div class="mb-4">
            <div class="form-label" for="name">Imię</label>
            <input id="text" name="name" placeholder="Imię" value="<?php if(isset($_POST['name']) && $isError): echo $_POST['name']; endif; ?>" require>
        </div>
        <div class="mb-4">
            <div class="form-label" for="surname">Nazwisko</label>
            <input id="text" name="surname" placeholder="Nazwisko" value="<?php if(isset($_POST['surname']) && $isError): echo $_POST['surname']; endif; ?>" require/>
        </div>
        <div class="mb-4">
            <div class="form-label" for="email">Email</label>
            <input id="email" name="email" placeholder="Adres E-mail" value="<?php if(isset($_POST['email']) && $isError): echo $_POST['email']; endif; ?>" require>
        </div>
        <div class="mb-4">
            <div class="form-label" for="password">Hasło</label>
            <input id="password" name="password" placeholder="Hasło" require />
        </div>                        
        <div class="mb-4">
            <div class="form-label" for="password2">Powtórz hasło</label>
            <input id="password" name="password2" placeholder="Powtórz hasło" require />
        </div>
        <div class="mb-4 d-flex justify-content-end">
            <button class ="btn btn-success" type="submit" name="submit">Wyślij</button>
        </div>
    </form>
</div>