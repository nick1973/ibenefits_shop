$(document).ready( function () {
    var table = $('#category').DataTable( {
        ajax: {
            url: 'all/categories'
            //dataSrc: 'data'
        },
        "columns": [
            { "data": function (data) {
                    return '<a href="categories/'+data.id+'/edit">'+data.category+'</a>'
                }, className: "centre"
            },
            { "data": function (data) {
                    return "<button onclick='delete_category_form("+data.id+")' type='submit' class='btn btn-danger'>Delete</button>"
                }, className: "centre"
            },
        ],
        //select: true
    } );

    var table = $('#products').DataTable( {
        ajax: {
            url: 'all/products'
            //dataSrc: 'data'
        },
        "columns": [
            { "data": function (data) {
                    return '<a href="products/'+data.id+'/edit">'+data.name+'</a>'
                }, className: "centre"
            },
            { "data": "category" , className: "centre" },
            { "data": function (data) {
                    var url = data.image_url
                    return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
                }, className: "centre"
            },
            { "data": "price" , className: "centre" },
            { "data": function (data) {
                    var visible = data.visible
                    if (visible == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },
            { "data": function (data) {
                    var new_in = data.new_in
                    if (new_in == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },
            { "data": function (data) {
                    var new_in = data.most_popular
                    if (new_in == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },
            { "data": function (data) {
                    return "<button onclick='delete_products_form("+data.id+")' type='submit' class='btn btn-danger'>Delete</button>"
                }, className: "centre"
            },
        ],
        //select: true
    } );

    // var table = $('#insurance').DataTable( {
    //     ajax: {
    //         url: 'all/insurance'
    //         //dataSrc: 'data'
    //     },
    //     "columns": [
    //         { "data": function (data) {
    //                 return '<a href="insurance/'+data.id+'/edit">'+data.name+'</a>'
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var url = data.image_url
    //                 return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
    //             }, className: "centre"
    //         },
    //         { "data": "price" , className: "centre" },
    //         { "data": function (data) {
    //                 var visible = data.visible
    //                 if (visible == "1"){
    //                     return "Yes"
    //                 } else {
    //                     return "No"
    //                 }
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var new_in = data.new_in
    //                 if (new_in == "1"){
    //                     return "Yes"
    //                 } else {
    //                     return "No"
    //                 }
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 return "<button onclick='delete_insurance_form("+data.id+")' type='submit' class='btn btn-danger'>Delete</button>"
    //
    //             }, className: "centre"
    //         },
    //     ],
    //     //select: true
    // } );

    // var table = $('#music-app').DataTable( {
    //     ajax: {
    //         url: 'all/music-app'
    //         //dataSrc: 'data'
    //     },
    //     "columns": [
    //         { "data": function (data) {
    //                 return '<a href="music-app/'+data.id+'/edit">'+data.name+'</a>'
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var url = data.image_url
    //                 return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
    //             }, className: "centre"
    //         },
    //         { "data": "price" , className: "centre" },
    //         { "data": function (data) {
    //                 var visible = data.visible
    //                 if (visible == "1"){
    //                     return "Yes"
    //                 } else {
    //                     return "No"
    //                 }
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var new_in = data.new_in
    //                 if (new_in == "1"){
    //                     return "Yes"
    //                 } else {
    //                     return "No"
    //                 }
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //             var id = data.id
    //             return "<button onclick='delete_music_app_form("+id+")' type='submit' class='btn btn-danger'>Delete</button>"
    //             }, className: "centre"
    //         },
    //     ],
    //     //select: true
    // });

    // var table = $('#online_training').DataTable( {
    //     ajax: {
    //         url: 'all/online-training'
    //         //dataSrc: 'data'
    //     },
    //     "columns": [
    //         { "data": function (data) {
    //                 return '<a href="online-training/'+data.id+'/edit">'+data.name+'</a>'
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var url = data.image_url
    //                 return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
    //             }, className: "centre"
    //         },
    //         { "data": "price" , className: "centre" },
    //         { "data": function (data) {
    //                 var visible = data.visible
    //                 if (visible == "1"){
    //                     return "Yes"
    //                 } else {
    //                     return "No"
    //                 }
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var new_in = data.new_in
    //                 if (new_in == "1"){
    //                     return "Yes"
    //                 } else {
    //                     return "No"
    //                 }
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var id = data.id
    //                 return "<button onclick='delete_online_training_form("+id+")' type='submit' class='btn btn-danger'>Delete</button>"
    //             }, className: "centre"
    //         },
    //     ],
    //     //select: true
    // });

    // var table = $('#rewards').DataTable( {
    //     ajax: {
    //         url: 'all/rewards'
    //         //dataSrc: 'data'
    //     },
    //     "columns": [
    //         { "data": function (data) {
    //                 return '<a href="reward/'+data.id+'/edit">'+data.name+'</a>'
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var url = data.image_url
    //                 return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
    //             }, className: "centre"
    //         },
    //         { "data": "price" , className: "centre" },
    //         { "data": function (data) {
    //                 var visible = data.visible
    //                 if (visible == "1"){
    //                     return "Yes"
    //                 } else {
    //                     return "No"
    //                 }
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var new_in = data.new_in
    //                 if (new_in == "1"){
    //                     return "Yes"
    //                 } else {
    //                     return "No"
    //                 }
    //             }, className: "centre"
    //         },
    //         { "data": function (data) {
    //                 var id = data.id
    //                 return "<button onclick='delete_reward_form("+id+")' type='submit' class='btn btn-danger'>Delete</button>"
    //             }, className: "centre"
    //         },
    //     ],
    //     //select: true
    // });
});

function delete_products_form(id) {
    $("#product-form").attr("action", '/admin/products/'+id).submit()
    console.log("deleted products id "+id+"")
}

// function delete_music_app_form(id) {
//     $("#music-app-form").attr("action", '/admin/music-app/'+id).submit()
//     console.log("deleted music id "+id+"")
// }
//
// function delete_insurance_form(id) {
//     $("#insurance-form").attr("action", '/admin/insurance/'+id+'').submit()
//     console.log("deleted insurance id "+id)
// }
//
// function delete_online_training_form(id) {
//     $("#online-training-form").attr("action", '/admin/online-training/'+id+'').submit()
//     console.log("deleted online-training id "+id)
// }
//
// function delete_reward_form(id) {
//     $("#rewards-form").attr("action", '/admin/reward/'+id+'').submit()
//     console.log("deleted online-training id "+id)
// }

function delete_category_form(id) {
    $("#category-form").attr("action", '/admin/categories/'+id+'').submit()
    console.log("deleted online-training id "+id)
}

