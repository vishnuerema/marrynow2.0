function langKnown(lang){
    $('#spokenLanguages').append("<option class='lang_db_save' ondblclick='langDeselect(this)' value= "+lang.value+" > "+lang.value+" </option>")
    lang.remove();
    }
    function langDeselect(lang){
    $('#spokenLanguagesTemp').append("<option ondblclick='langKnown(this)' value="+lang.value+" >"+lang.value+" </option>")
    lang.remove();
    }
    function addNewLang(){
        event.preventDefault();
    var value = $('#newLang').val();
    if(value==""){
        return false;
    }
    else{
    $('#spokenLanguages').append("<option ondblclick='langDeselect(this)' value= "+value+" > "+value+" </option>")
    $('#newLang').val("");
}
    }
  //  end language choosing secondary_registration page


  function Intr(interest){
    $('#IntrestsData').append("<option class='interest_db_save' ondblclick='InterestDeselect(this)' value= "+interest.value+" > "+interest.value+" </option>")
    interest.remove();
    }
    function InterestDeselect(interest){
    $('#Intrests').append("<option ondblclick='Intr(this)' value="+interest.value+" >"+interest.value+" </option>")
    interest.remove();
    }
    function addNewIntr(){
        event.preventDefault();
    var value = $('#newIntr').val();
    if(value==""){
        return false;
    }else{
    $('#IntrestsData').append("<option ondblclick='InterestDeselect(this)' value= "+value+" > "+value+" </option>")
    $('#newIntr').val("");
    }
    }

    
    function hobbie(hobbie){
        $('#hobbieData').append("<option class='hobbies_db_save' ondblclick='hobbieDeselect(this)' value= "+hobbie.value+" > "+hobbie.value+" </option>")
        hobbie.remove();
        }
        function hobbieDeselect(hobbie){
        $('#hobbies').append("<option ondblclick='hobbie(this)' value="+hobbie.value+" >"+hobbie.value+" </option>")
        hobbie.remove();
        }
        function addNewHobb(){
            event.preventDefault();
        var value = $('#newHobb').val();
        if(value==""){
            return false;
        }
        else{
        $('#hobbieData').append("<option ondblclick='hobbieDeselect(this)' value= "+value+" > "+value+" </option>")
        $('#newHobb').val("");
        }
    }



        function sports(sport){
            $('#sportsData').append("<option class='sports_db_save' ondblclick='sportDeselect(this)' value= "+sport.value+" > "+sport.value+" </option>")
            sport.remove();
            }
            function sportDeselect(sport){
            $('#sports').append("<option ondblclick='sports(this)' value="+sport.value+" >"+sport.value+" </option>")
            sport.remove();
            }
            function addNewSports(){
                event.preventDefault();
            var value = $('#newsport').val();
            if(value==""){
                return false;
            }
            else{
            $('#sportsData').append("<option ondblclick='sportDeselect(this)' value= "+value+" > "+value+" </option>")
            $('#newsport').val("");
            }
        }


            function music(music){
                $('#musicData').append("<option class='music_db_save' ondblclick='musicDeselect(this)' value= "+music.value+" > "+music.value+" </option>")
                music.remove();
                }
                function musicDeselect(music){
                $('#music').append("<option ondblclick='sports(this)' value="+music.value+" >"+music.value+" </option>")
                music.remove();
                }
                function addNewMusic(){
                    event.preventDefault();
                var value = $('#newmusic').val();
                if(value==""){
                    return false;
                }
                else{
                $('#musicData').append("<option ondblclick='musicDeselect(this)' value= "+value+" > "+value+" </option>")
                $('#newmusic').val("");
                }
            }


                function food(food){
                    $('#foodData').append("<option class='food_db_save' ondblclick='foodDeselect(this)' value= "+food.value+" > "+food.value+" </option>")
                    food.remove();
                    }
                    function foodDeselect(food){
                    $('#food').append("<option ondblclick='food(this)' value="+food.value+" >"+food.value+" </option>")
                    food.remove();
                    }
                    function addNewFood(){
                        event.preventDefault();
                    var value = $('#newfood').val();
                    if(value==""){
                        return false;
                    }
                    else{
                    $('#foodData').append("<option ondblclick='foodDeselect(this)' value= "+value+" > "+value+" </option>")
                    $('#newfood').val("");
                    }
                }
    









