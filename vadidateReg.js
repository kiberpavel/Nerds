function validateRegistration(obj){
    let return_value = true;
    
    const reg_login = /^[a-z][a-z0-9_\.]{2,30}$/;
    const reg_pass = /^[a-z0-9]{4,20}$/;
    
    const fName = obj.first_name.value;
    const sName = obj.second_name.value;
    const login = obj.login.value;
    const password = obj.password.value;
    
    const elFname = document.querySelector('.form__item__input--fname');
    const elSname = document.querySelector('.form__item__input--sname');
    const elLogin = document.querySelector('.form__item__input--login');
    const elPassword = document.querySelector('.form__item__input--pass');
    
    const classError = 'input--error';
    
      if (fName == "") {
          return_value = false;
          elFname.classList.add(classError);
      }else {
          if (elFname.classList.contains(classError))
            elFname.classList.remove(classError);
      }
    
      if (sName == "") {
          return_value = false;
          elSname.classList.add(classError);
      }else {
          if (elSname.classList.contains(classError))
            elSname.classList.remove(classError);
      }
    
      if(reg_login.exec(login) == null || login =="")
      {
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