$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('.grade').on('change',function(){
    //alert('ok');
    var notes = $(this).val();
    console.log(notes);
      $.post('/studentgrade',{notes:notes},function(response){
        console.log(response);
        var html='';
        $.each(response,function(i,v){
          html+=`
          <option value="${v.id}">${v.name}</option>
          `;
        })
        $('.stuclass').html(html);
        })
      })

    $('.subject').on('change',function(){
    //alert('ok');
    var subject = $(this).val();
    console.log(subject);
      $.post('/teachersubject',{subject:subject},function(response){
        console.log(response);
        var html='';
        $.each(response,function(i,v){
          html+=`
          <option value="${v.id}">${v.name}</option>
          `;
        })
        $('.teasub').html(html);
        })
      })

  
      // $('#major').hide(); 

      // $('#year').change(function(){
      //   let year = $(this).val();
      //   if (year != 1) {
      //     $('#major').show();
      //   }else{
      //     $('#major').hide();

      //   }
      // })
    })