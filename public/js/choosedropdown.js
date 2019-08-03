function langKnown(lang){
    $('#spokenLanguages').append("<option class='lang_db_save' onclick='langDeselect(this)' value= "+lang.value+" > "+lang.value+" </option>")
    lang.remove();
    }
    function langDeselect(lang){
    $('#spokenLanguagesTemp').append("<option onclick='langKnown(this)' value="+lang.value+" >"+lang.value+" </option>")
    lang.remove();
    }
    function addNewLang(){
        event.preventDefault();
    var value = $('#newLang').val();
    if(value==""){
        return false;
    }
    else{
    $('#spokenLanguages').append("<option onclick='langDeselect(this)' value= "+value+" > "+value+" </option>")
    $('#newLang').val("");
}
    }
  //  end language choosing secondary_registration page


  function Intr(interest){
    $('#IntrestsData').append("<option class='interest_db_save' onclick='InterestDeselect(this)' value= "+interest.value+" > "+interest.value+" </option>")
    interest.remove();
    }
    function InterestDeselect(interest){
    $('#Intrests').append("<option onclick='Intr(this)' value="+interest.value+" >"+interest.value+" </option>")
    interest.remove();
    }
    function addNewIntr(){
        event.preventDefault();
    var value = $('#newIntr').val();
    if(value==""){
        return false;
    }else{
    $('#IntrestsData').append("<option onclick='InterestDeselect(this)' value= "+value+" > "+value+" </option>")
    $('#newIntr').val("");
    }
    }

    
    function hobbie(hobbie){
        $('#hobbieData').append("<option class='hobbies_db_save' onclick='hobbieDeselect(this)' value= "+hobbie.value+" > "+hobbie.value+" </option>")
        hobbie.remove();
        }
        function hobbieDeselect(hobbie){
        $('#hobbies').append("<option onclick='hobbie(this)' value="+hobbie.value+" >"+hobbie.value+" </option>")
        hobbie.remove();
        }
        function addNewHobb(){
            event.preventDefault();
        var value = $('#newHobb').val();
        if(value==""){
            return false;
        }
        else{
        $('#hobbieData').append("<option onclick='hobbieDeselect(this)' value= "+value+" > "+value+" </option>")
        $('#newHobb').val("");
        }
    }



        function sports(sport){
            $('#sportsData').append("<option class='sports_db_save' onclick='sportDeselect(this)' value= "+sport.value+" > "+sport.value+" </option>")
            sport.remove();
            }
            function sportDeselect(sport){
            $('#sports').append("<option onclick='sports(this)' value="+sport.value+" >"+sport.value+" </option>")
            sport.remove();
            }
            function addNewSports(){
                event.preventDefault();
            var value = $('#newsport').val();
            if(value==""){
                return false;
            }
            else{
            $('#sportsData').append("<option onclick='sportDeselect(this)' value= "+value+" > "+value+" </option>")
            $('#newsport').val("");
            }
        }


            function music(music){
                $('#musicData').append("<option class='music_db_save' onclick='musicDeselect(this)' value= "+music.value+" > "+music.value+" </option>")
                music.remove();
                }
                function musicDeselect(music){
                $('#music').append("<option onclick='sports(this)' value="+music.value+" >"+music.value+" </option>")
                music.remove();
                }
                function addNewMusic(){
                    event.preventDefault();
                var value = $('#newmusic').val();
                if(value==""){
                    return false;
                }
                else{
                $('#musicData').append("<option onclick='musicDeselect(this)' value= "+value+" > "+value+" </option>")
                $('#newmusic').val("");
                }
            }


                function food(food){
                    $('#foodData').append("<option class='food_db_save' onclick='foodDeselect(this)' value= "+food.value+" > "+food.value+" </option>")
                    food.remove();
                    }
                    function foodDeselect(food){
                    $('#food').append("<option onclick='food(this)' value="+food.value+" >"+food.value+" </option>")
                    food.remove();
                    }
                    function addNewFood(){
                        event.preventDefault();
                    var value = $('#newfood').val();
                    if(value==""){
                        return false;
                    }
                    else{
                    $('#foodData').append("<option onclick='foodDeselect(this)' value= "+value+" > "+value+" </option>")
                    $('#newfood').val("");
                    }
                }
     

                function martial(martial){
                    $('#maritalData').append("<option class='martial_db_save' onclick='maritalDeselect(this)' value= "+martial.value+" > "+martial.value+" </option>")
                    martial.remove();
                    }
                    function maritalDeselect(martial){
                    $('#martial').append("<option onclick='martial(this)' value="+martial.value+" >"+martial.value+" </option>")
                    martial.remove();
                    }
                    function addNewmarit(){
                        event.preventDefault();
                    var value = $('#newmartial').val();
                    if(value==""){
                        return false;
                    }
                    else{
                    $('#maritalData').append("<option onclick='maritalDeselect(this)' value= "+value+" > "+value+" </option>")
                    $('#newmartial').val("");
                    }
                }
    

                function occupationlist(occupts){
                    $('#occupationss').append("<option   class='occu_db_save selVal' onclick='occuDeselect(this)' value= "+occupts.value+" > "+occupts.value+" </option>")
                    occupts.remove();
                    }
                    function occuDeselect(occupts){
             
                    $('#occuptionTemp').append("<option  onclick='occupationlist(this)' value="+occupts.value+" >"+occupts.value+" </option>")
                    occupts.remove();
                    }
                    function addNewoccu(){
                        event.preventDefault();
                    var value = $('#newoccu').val();
                    if(value==""){
                        return false;
                    }
                    else{
                    $('#occupationss').append("<option onclick='occuDeselect(this)' value= "+value+" > "+value+" </option>")
                    $('#newoccu').val("");
                }
                    }





