// /**
//  * Created by Admin on 12.03.2018.
//  */
// $( document ).ready(
//
//     function(){
//         var time;
//         $("#title-slug").on("keyup",function () {
//             clearTimeout(time);
//            time= setTimeout(function () {
//                 slugAjax();
//             },1000);
//         });
//
// function slugAjax() {
//  var title=$("#title-slug").val();
//     $.ajax({
//         url: '/admin-panel/ajax',
//         type: 'GET',
//         dataType: 'json',
//         data: {name: title},
//         // beforeSend: function() {
//         //     //$('#modal-portfolio').remove();
//         // },
//         success: function(json) {
//            console.log('json:'+json);
//         },
//         error: function(xhr, ajaxOptions, thrownError) {
//             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
//         }
//     });
// }
//     })
// $("#title-slug").keyup(function () {
//     var str =$(this).val();
//     var trims=$.trim(str)
//
//     var slug =trims.replace('/[^0-9a-z-_ ]/i', '-')
//     $("#slug").val(slug.toLowerCase())
// })

// function translit($s) {
//     $s = (string) $s; // преобразуем в строковое значение
//     $s = strip_tags($s); // убираем HTML-теги
//     $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
//     $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
//     $s = trim($s); // убираем пробелы в начале и конце строки
//     $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
//     $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
//     $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
//     $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
//     return $s; // возвращаем результат
// }
