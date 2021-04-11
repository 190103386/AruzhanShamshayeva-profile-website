<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style >
	body {
  background-color: white;
  background-image: url(https://image.freepik.com/free-vector/beautiful-black-and-white-illustration-for-adult-coloring-book-with-rectangle-linear-floral-pattern_76645-438.jpg);
  background-position: left top;
  background-repeat: repeat;
  -webkit-font-smoothing: antialiased;
}
	.form-wrap {
  width: 700px;
  height: 700px;
  background: #ffd500;
  border-radius: 20px;
  margin-left: 400px;
  padding: 20px;

   
}
.form-wrap *{transition: .1s linear}
.profile {
  width: 650px;
  display: flex;
  justify-content: center;
  float: right;
  text-align: center;
  padding: 30px;
  margin-left: 50px;

}
form {
  background: white;
  width: calc(100% - 240px);
  height: 500px;
  padding: 30px;
  border-radius: 0 20px 20px 0;
  color: #7b7b7b; 
  margin-left:130px;
  margin-top: 180px;

}
.form-wrap:after, form div:after {
  content: "";
  display: table;
  clear: both;
}
form div {
  margin-bottom: 15px;
  position: relative;
}
h1 {
  font-size: 24px;
  font-weight: 400;
  position: relative;
  margin-top: 50px;
}
h1:after {
  content: "\f138";
  font-size: 40px;
  font-family: FontAwesome;
  position: absolute;
  top: 50px;
  left: 50%;
  transform: translateX(-50%);
}

/********************** стилизация элементов формы **********************/
label, span {
  display: block;
  font-size: 14px;
  margin-bottom: 8px;
}
input[type="text"], input[type="email"] {
  border-width: 0;
  outline: none;
  margin: 0;
  width: 90%;
  padding: 10px 15px;
  background: #e6e6e6;
}
input[type="text"]:focus, input[type="email"]:focus {
  box-shadow: inset 0 0 0 2px rgba(0,0,0,.2);
}
.radio label {
  position: relative;
  padding-left: 50px;
  cursor: pointer;
  width: 80%;
  float: left;
  line-height: 40px;
}
.radio input {
  position: absolute;  
  opacity: 0;

}
.radio label:hover input ~ .radio-control,
.radiol input:focus ~ .radio-control {
  box-shadow: inset 0 0 0 2px rgba(0,0,0,.2);
}
.radio input:checked ~ .radio-control {
  color: red;
}
select {
  width: 100%;
  cursor: pointer;
  padding: 10px 15px;
  outline: 0;
  border: 0;
  background: #e6e6e6;
  color: #7b7b7b;
  -webkit-appearance: none; /*убираем галочку в webkit-браузерах*/
  -moz-appearance: none; /*убираем галочку в Mozilla Firefox*/
}
select::-ms-expand {
  display: none; /*убираем галочку в IE*/
}
.select-arrow {
  position: absolute;
  top: 38px;
  right: 15px;
  width: 0;
  height: 0;
  pointer-events: none; /*активизируем показ списка при нажатии на стрелку*/
  border-style: solid;
  border-width: 8px 5px 0 5px;
  border-color: #7b7b7b transparent transparent transparent;
}
button {
  padding: 5px 0;
  border-width: 0;
  display: block;
  width: 150px;
  margin: 25px auto 0;
  background: green;
  color: white;
  font-size: 14px;
  outline: none;
  text-transform: uppercase;
  margin-left: 270px;
}
.input-group{
  margin-left: 200px;
  margin-top: -100px;
}
/********************** добавляем форме адаптивность **********************/
@media (max-width: 600px) {
  .form-wrap {margin: 20px auto; max-width: 550px; width:100%;}
  .profile, form {float: none; width: 100%;}
  h1 {margin-top: auto; padding-bottom: 50px;}
  form {border-radius: 0 0 20px 20px;}
}
</style>
<body>

        <div class="form-wrap">
  <div class="profile"><img src="https://html5book.ru/wp-content/uploads/2016/10/profile-image.png">
    <h1>{{ __('lang.Register')}}</h1>
  </div>
  <div class="container">
    <form action="{{route('addimage')}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
            
      
    <div>
      <label for="name">{{ __('lang.Name')}}</label>
      <input type="text" name="Name" required>
    </div>
    <div>
      <label for="name" >{{ __('lang.Surname')}}</label>
      <input type="text" name="Surname" required>
    </div>
    <div>
      <label for="email">{{ __('lang.Email')}}</label>
      <input type="email" name="Email" required>
    </div>
    <div>
      <label for="country">{{ __('lang.Country')}}</label>
      <select name="Country">
        <option>Select your country of residence</option>
        <option value="Россия">Kazakhstan</option> 
        <option value="Беларусь">Russia</option> 
      </select> 
      <div class="select-arrow"></div> 
    </div> 
    </div>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="Photo">
        <label class="custom-file-label"></label>

      </div>
      
    </div>
    <button type="submit" name="submit" class="btn btn-success">{{ __('lang.Save data')}}</button>
    </form>
</div>
</div>
</body>
</html>