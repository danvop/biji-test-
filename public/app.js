//---create modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
  
  var text = document.getElementById('text').value;
  document.getElementById('modal-text').innerHTML = text;

}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}
//--end create modal
//
//---edit modal
function editModal(taskId) {
  $('#editModal').modal();
  var modalText = $("p.taskId-" + taskId).text();
  $('.modal-body #task-text').val(modalText);
  $('.btn-edit-modal').attr( "onclick", "modalEditButton(" + taskId + ")" );
}
//---end edit modal
function modalEditButton(taskId) {
  console.log(taskId);
  var editText = $('.modal-body #task-text').val();
  $("p.taskId-" + taskId).text(editText);
  $.post( "/tasks/update", { id: taskId, text: editText });
  $('#editModal').modal('hide');
}

function showTaskCreateForm() {
  $("#task-create").show();
  $('.filter-form').hide();
}
function hideForm(){
  $("#task-create").hide();
  $(".preview-div").hide();
  $(".filter-form").show();
}

function showPreview() {
  $('#preview-username').text($('#userName').val());
  $('#preview-mail').text($('#email').val());
  $('#preview-text').text($('#text').val());
  $('.preview-div').show();
  $('#preview-img').show();
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('.img-preview').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
  
function markAsDone(taskId) {
  $.post( "/tasks/status", { id: taskId })
  .done(function() {
    $( 'button.taskId-' + taskId).replaceWith("<button type='button' class='btn btn-success'>DONE</button>");
  });
}



