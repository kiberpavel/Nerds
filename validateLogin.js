function validateLogin(obj){
    let return_value = true;
    
    const reg_login = /^[a-z][a-z0-9_\.]{2,30}$/;
    const reg_pass = /^[a-z0-9]{4,20}$/;
    
    const login = obj.login.value;
    const password = obj.password.value;
    
    const elLogin = document.querySelector('.form__item__input--login');
    const elPassword = document.querySelector('.form__item__input--pass');
    const classError = 'input--error';
    
      if(reg_login.exec(login) == null || login =="") {
          return_value = false;
          elLogin.classList.add(classError);
      }else {
        if (elLogin.classList.contains(classError))
          elLogin.classList.remove(classError);
      }
    
      if (reg_pass.exec(password) == null || password == "") {
          return_value = false;
          elPassword.classList.add(classError);
      }else {
          if (elPassword.classList.contains(classError))
            elPassword.classList.remove(classError);
      }
      return return_value;
    }
    