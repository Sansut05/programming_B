var currentPage = '#Page7'


function setup(){
    console. log('P5 setup kaldt ')
 
   var allMenuItem = selectAll('.sidebar a')
   allMenuItem.map(
     function(item){
        item.mousePressed(
            function(){
                shiftPage(item.attribute('action'))
            }
        )
     }
   )
}



function shiftPage(newPage){
    select(currentPage).removeClass('show')
    select(newPage).addClass('show')
    currentPage = newPage
}

