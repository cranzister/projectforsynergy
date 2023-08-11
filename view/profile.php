<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<div class="row">
  <bode class= "bg-dark text-white">
  
  <div class="col-sm-3">
  <img class="card-img-top" src="https://winnote.ru/wp-content/uploads/2016/01/1454222417_del_recent_avatar1.png" alt="..." />

  </div>
  <div class="col-sm-9">
    <p>Имя: <span id="userName"></span></p>
    <p>Фамилия: <span id="userLastname"></span></p>
    <p>Email: <span id="userEmail"></span></p>
    <p>Id: <span id="userId"></span></p>
    </div>
</div>
</div>

<script>
  let userName = document.getElementById('userName');
  let userLastname = document.getElementById('userLastname');
  let userEmail = document.getElementById('userEmail');
  let userId = document.getElementById('userId');
  fetch('/getUser')
    .then(function (response){ return response.json()})
    .then(function (result){
      userName.innerText = (result.name);
      userLastname.innerText = (result.lastname);
      userEmail.innerText = (result.email);
      userId.innerText = (result.id);
    })
    
</script>

