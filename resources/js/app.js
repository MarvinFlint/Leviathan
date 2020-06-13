require('./bootstrap');
$(document).ready(function(){

    //declare base variables
    var baseHp = 541;
    var baseAr = 29;
    var baseMr = 30;

    //declare per level variables
    var hpLvl = 84;
    var arLvl = 3.75;
    var mrLvl = 0.5;

    //declate item stats

    var protobelt = [60, 0, 300];
    var orb = [20, 15, 200];
    var morellomonicon = [70, 15, 300];

    //recaluclate basestats based on level selection 
    $('#level').change(function(){

        //gets value of currently selected option
        var levelModifier = $('#level').val();
        console.log(levelModifier);
        var totalHp = baseHp + (levelModifier * hpLvl);
        var totalAr = baseAr + (levelModifier * arLvl);
        var totalMr = baseMr + (levelModifier * mrLvl);

        //cast texts to respective span
        $('.hp').text(totalHp);
        $('.ar').text(totalAr);
        $('.mr').text(totalMr);
    })
    
    //declare the array which stores the selected items
    var selectedItems = new Array();

    // function when clicking an item
    $('.item').click(function(){

        //get the name of the item
        var itemName = $(this).attr('data-name');

        //check if item is selected
        if($(this).hasClass('selected')){

            //get the position / index of the item in the array
            var itemIndex = $(this).attr('data-index');

            //remove the item with the specified index from the array
            selectedItems.splice(itemIndex);

            //remove the selected attribute
            $(this).removeClass('selected').removeAttr('data-index');

            //function call to recalculate the ap gained from items using the array as argument
            recalculate(selectedItems);

            //logs
            console.log(selectedItems);
            console.log(itemIndex);

            
        }
        else{

            //mark clicked item as selected
            $(this).addClass('selected');

            //add item to the array
            selectedItems.push(itemName);

            //calculate and assign the index attribute. index starts with 0, thus x - 1
            var itemIndex = selectedItems.length - 1;
            $(this).attr('data-index', itemIndex);

            //function call to recalculate the ap gained from items using the array as argument
            recalculate(selectedItems);

            //logs
            console.log(selectedItems);
            console.log(itemIndex);

        }
    })

    //calculate ap gained from $items
    function recalculate(items){    

        for(var i = 0; i < items.length; i++){

            //get the name of the item currenlty being iterated
            var currentItemName = items[i];
            console.log(currentItemName);
            var totalItemsFromAp = 0;

            calcToText(totalItemsFromAp);
        }        
    }
    function calcToText(ap){

        $('.ap').text(ap);
        // console.log(ap);

    }
})
