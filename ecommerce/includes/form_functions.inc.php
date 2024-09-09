<?php 
   
   //Criando os primeiros cinco valores
   function create_form_input($name, $type, $label='', $errors = array(), $options = array()){

    //Verificando e processando os valores 
    $value = false;
    if(isset($_POST[$name])) $value = $_POST[$name];
    //if($value && get_magic_quotes_gpc()) $value = stripslashes($value);

    //Abertura do DIV que engloba o elemento
    echo '<div class="form-group';
    if(array_key_exists($name, $errors))
    echo 'has-error';
    echo '">';

    //Label para informar algum que tenha sido fornecido
    if(!empty($label))
    echo '<label for="'.$name.'" class="control-label">'.$label.'</label>';

    //Verificando o tipo de entrada
    if(($type === 'text') || ($type === 'password') || ($type === 'email')){

        //Criando a entrada
        echo '<input type="'.$type.'"name="'.$name.'" id="'.$name.'" class="form-control"';
        //Adicionando o valor de entrada se for aplicada
        if($value) echo 'value="'.htmlspecialchars($value).'"';
        //Verificando opções adicionais
        if(!empty($options) && is_array($options)){
            foreach($options as $k => $v){
                echo "$k=\"$v\"";
            }
        }
        echo '>'; //Finalizando elemento de entrada

        //Mensagem de erro se existir
        if(array_key_exists($name, $errors))
        echo '<span class="help-block">'.$errors[$name].'</span>';

     }elseif($type === 'textara'){//Verificando se o tipo de entrada corresponde a uma textarea

        //Mostrado o erro antes da definição da textarea
        if(array_key_exists($name, $errors))
        echo '<span class="help-block">'.$errors[$name].'</span>';

        //Criando textarea
        echo '<textarea name="'.$name.'" id="'.$name.'" class="form-control"';
        //Verificando opções adicionais
        if(!empty($options) && is_array($options)){
            foreach($options as $k => $v){
                echo "$k=\"$v\"";
            }
        }
        echo '>';

        //Adicionando o valor a textarea
        if($value)
        echo $value;

        //Finalizando textarea
        echo '</textarea>';
     }//Fim do if-else principal
     echo '</div>';
   }//Fim  da função create_form_input()





   $reg_errors = array();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //verificando  o primeiro nome
    if(preg_match('/^[A-Z\'.-]{2,45}$/i', $_POST['first_name'])){
        $fn = escape_data($_POST['first_name'], $dbc);
    }else{
        $reg_errors['first-name'] = 'Please enter your First name!';
    }

    //Verificando o sobrenome
    if(preg_match('/^[A-Z\'.-]{2,45}$/i', $_POST['last_name'])){
        $ln = escape_data($_POST['last_name'], $dbc);
    }else{
    $reg_errors['last_name'] = 'Please enter your  last name!';
    }

    //Verificando o nome de usuario
    if(preg_match('/^[A-Z0-9]{2,45}$/i', $_POST['username'])){
    $u = escape_data($_POST['username'], $dbc);
    }else{
    $reg_errors['username'] = 'Please enter a desired name using only letters and number!';
    }

    //Verificando endereco email
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $e = escape_data($_POST['email'], $dbc);
    }else{
    $reg_errors['email'] = 'Please enter a valid  email address!';
    }

    //Verificando e fazendo correspondencia das senhas
    if(preg_match('/^(\w*(?=\w*\d)(?=\w*[a-z])(?=\w*[A-Z])\w*){6,}$/', $_POST['pass1'])){
    if($_POST['pass1'] === $_POST['pass2']){
        $p = $_POST['pass1'];
    }else{
        $reg_errors['pass2'] = 'Your password did not match the confirmed password!';
    }
    }else{
    $reg_errors['pass1'] = 'Please enter a valid Password';
    }

    //Verificando a disponibilidade do endereco do email e do nome do usuario
    if(empty($reg_errors)){
    $q ="SELECT email, username FROM users WHERE email='$e' OR username='$u'";
    $r =mysqli_query($dbc, $q);
    $rows =mysqli_num_rows($r);
    if($rows === 0){

        //Adiicionando usuarisos ao banco de dados
        $q="INSERT INTO users (username, email, pass, first_name, last_name, data_expires) VALUES('$u', '$e', '".password_hash($p, PASSWORD_BCRYPT)."', '$fn', '$ln', ADDDATE(NOW(), INTERVAL 1 MONTH))";
        $r=mysqli_query($dbc, $q);

        //Se a query criar uma linha, agradecer ao novo cliente e enviar um email
        if(mysqli_affected_rows($dbc) === 1){
            echo '<div class"alert alert-sucess">
            <h3>Thanks</h3>
            <p>Thank  you for registering! You may now log in and acess the sites\'s content.</p></div>';

            $body = "Thanks you for registering at  <whatever site>. Blah. Blah. Blah.\n\n";
            mail($_POST['email'], 'Registration Confirmation', $body, 'From: vemros7@gmail.com');
            include('./includes/footer.html');
            exit();
        }else{//Gerando erro caso a query nao tiver um exito
            trigger_error('You could not be registered due to a system error. We apologize for any inconvenience. We will correct the error ASAP.');
        }

        //Gerando erro se o email  ou nome de usuario nao estiverem disponiveis
        if($rows === 2){
            $reg_errors['email'] = 'This email address has already been  registered. If you have forgotten your password, use the link at left to have your password sent  to you.';
            
            $reg_errors['username'] = 'This username has already been  registered. Please  try another.';
        }else{//Confiramando o item cadastrado
            $row = mysqli_fetch_array($r, MYSQLI_NUM);
            if(($row[0] === $_POST['email']) && ($row[1] === $_POST['username'])){
                $reg_errors['email'] = 'This email address has already been registered. If you have forgotten your password, use the link at left to have your password sent to you.';

                $reg_errors['username'] = 'This username  has  already been registered with this email address. If you have forgotten your  password, use the link at left to have your password sent to you.';
            }elseif($row[0] === $_POST['email']){
                $reg_errors['email'] = 'This  email address  has already benn registered. If you  have forgotten you password, use the link at left to have your password sent  to you.';
            }elseif($row[1] === $_POST['username']){
                $reg_errors['username'] = 'This username has already been registered. Please try another.';
            }
        }//Fim do else de $rows  === 2
    }//Fim do if $rows ===0
    }//Fim do if empty ($reg_errors)
    }//Fim da condicional  principal referente  a submissao do formulario