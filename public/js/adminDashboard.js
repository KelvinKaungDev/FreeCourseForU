function createPost() {
    $("#create_Post").css("display","block")
    $("#user_table").css("display","none")
    $("#roles").css("visibility","hidden")
    $("#classes").css("visibility","hidden")
    $("#create_Role").css("visibility","hidden")
    $("#questions").css("visibility","hidden")
    $("#customer").css("visibility","hidden")
    $("#courses").css("visibility","hidden")
}

function userAccount() {
    $("#user_table").css("display","block")
    $("#classes").css("visibility","hidden")
    $("#roles").css("visibility","hidden")
    $("#questions").css("visibility","hidden")
    $("#customer").css("visibility","hidden")
    $("#courses").css("visibility","hidden")
}

function courses() {
    $("#courses").css("visibility","visible")
    $("#user_table").css("display","none")
    $("#customer").css("visibility","hidden")
    $("#classes").css("visibility","hidden")
    $("#roles").css("visibility","hidden")
    $("#questions").css("visibility","hidden")
}

function customer() {
    $("#customer").css("visibility","visible")
    $("#user_table").css("display","none")
    $("#courses").css("visibility","hidden")
    $("#classes").css("visibility","hidden")
    $("#roles").css("visibility","hidden")
    $("#questions").css("visibility","hidden")
}

function questions() {
    $("#questions").css("visibility","visible")
    $("#customer").css("visibility","hidden")
    $("#user_table").css("display","none")
    $("#courses").css("visibility","hidden")
    $("#classes").css("visibility","hidden")
    $("#roles").css("visibility","hidden")
}

function roles() {
    $("#roles").css("visibility","visible")
    $("#questions").css("visibility","hidden")
    $("#customer").css("visibility","hidden")
    $("#user_table").css("display","none")
    $("#courses").css("visibility","hidden")
    $("#classes").css("visibility","hidden")
}

function create_Role() {
    $("#create_Role").css("visibility","visible")
    $("#roles").css("visibility","hidden")
    $("#questions").css("visibility","hidden")
    $("#customer").css("visibility","hidden")
    $("#user_table").css("display","none")
    $("#create_Post").css("display","none")
    $("#courses").css("visibility","hidden")
    $("#classes").css("visibility","hidden")
}

function create_Class() {
    $("#classes").css("visibility","visible")
    $("#create_Role").css("visibility","hidden")
    $("#roles").css("visibility","hidden")
    $("#questions").css("visibility","hidden")
    $("#customer").css("visibility","hidden")
    $("#user_table").css("display","none")
    $("#create_Post").css("display","none")
    $("#courses").css("visibility","hidden")
}


