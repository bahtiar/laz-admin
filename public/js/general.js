function supplier_Selectdata(values) {
    var data = $.ajax({
        url: base_url+"/suppliers/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#supplier_id").select2({
            multiple: false,
            placeholder: 'Pilih Supplier',
            data : arrs
        }).on('change', function (e) {
            // sconsole.log($(this).val());
            $('#table-detail tbody').html('');
            add_row('', 0, '', 1, 0, 0, 0, 0, '');

        });

        if(values != ''){
            console.log('values:'+values);
            $("#supplier_id").val(values);
        }

    });

}

function customer_Selectdata(values) {
    var data = $.ajax({
        url: base_url+"/customers/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#customer_id").select2({
            multiple: false,
            placeholder: 'Pilih Pelanggan',
            data : arrs
        }).on('change', function (e) {
            // sconsole.log($(this).val());

        });
    });

    if(values != ''){
        $("#customer_id").val(values);
    }

}

function warehouse_Selectdata(values) {

    var data = $.ajax({
        url: base_url+"/warehouses/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#warehouse_id").select2({
            multiple: false,
            placeholder: 'Pilih Gudang',
            data : arrs
        }).on('change', function (e) {
            // sconsole.log($(this).val());

        });

        if(values != ''){
            $("#warehouse_id").val(values).trigger('change');
        }

    });
}

function salesman_Selectdata(values) {

    var data = $.ajax({
        url: base_url+"/salesman/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#salesman_id").select2({
            multiple: false,
            placeholder: 'Pilih Salesman',
            data : arrs
        }).on('change', function (e) {
            // sconsole.log($(this).val());

        });
    });

    if(values != ''){
        $("#salesman_id").val(values);
    }

}


function category_Selectdata(values) {
    var data = $.ajax({
        url: base_url+"/product-categories/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#product_category_id").select2({
            multiple: false,
            placeholder: 'Pilih Kategory Product',
            tags: true,
            data : arrs
        }).on('change', function (e) {
            // console.log($(this).val());

        });
        if(values != ''){
            $("#product_category_id").val(values).trigger('change');
        }
    });

    if(values != ''){
        $("#product_category_id").val(values).trigger('change');
    }

}

function cashBank_Selectdata(values) {

    var data = $.ajax({
        url: base_url+"/cash-banks/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        if (0 != $("#pay_from").length) {

            $("#pay_from").select2({
                multiple: false,
                placeholder: 'Pilih Kas/Bank',
                data : arrs
            }).on('change', function (e) {
                // sconsole.log($(this).val());
            });

            if(values != ''){
                $("#pay_from").val(values).trigger('change');
            }
        }

        if (0 != $("#pay_to").length) {

            $("#pay_to").select2({
                multiple: false,
                placeholder: 'Pilih Kas/Bank',
                data : arrs
            }).on('change', function (e) {
                // sconsole.log($(this).val());
            });


            if(values != ''){
                $("#pay_to").val(values).trigger('change');
            }
        }

    });

}

function accountExpenses_Selectdata($find, $no, $account_id) {

    var data = $.ajax({
        url: base_url+"/accounts/dataSelectExpenses",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $find.find('#account_expense'+$no).select2({
            multiple: false,
            placeholder: 'Pilih Biaya',
            data : arrs
        }).on('change', function (e) {
            var value = $(this).val();
            $(this).parent().parent().find('#account_id').val(value);
        });

        if(account_id != ''){
            $find.find('#account_expense'+$no).val(account_id).trigger('change');
        }

    });

}


function accountCategory_Selectdata(values) {
    var data = $.ajax({
        url: base_url+"/account-categories/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {

        var obj = jQuery.parseJSON(data);

        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );

        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#account_category_id").select2({
            multiple: false,
            placeholder: 'Pilih Kategory Akun',
            tags: true,
            data : arrs
        }).on('change', function (e) {
            // console.log($(this).val());

        });
        if(values != ''){
            $("#account_category_id").val(values).trigger('change');
        }
    });

}


function unit_Selectdata(values, no, many) {
    if (0 != $("#product_unit_id").length || 0 != $(".unit").length) {
        var data = $.ajax({
            url: base_url+"/product-units/dataSelect",
            type: "GET",
            data: { }
        })
        .done(function(data) {
            var obj = jQuery.parseJSON(data);
            arrs = [];
            arrs.push( {
                id : '',
                text : ''
            } );
            for (var i = 0; i<obj.length; i++) {
                arrs.push( {
                    id : obj[i].id,
                    text : obj[i].text
                } );
            }
            if(0 != $("#product_unit_id").length && many == 0){
                $("#product_unit_id").select2({
                    multiple: false,
                    placeholder: 'Pilih Satuan Product',
                    tags: true,
                    data : arrs
                }).on('change', function (e) {
                    // console.log($(this).val());

                });

                if(values != ''){
                    $("#product_unit_id").val(values).trigger('change');
                }
            } else if(0 != $(".unit").length && many == 1){

                $('.product_unit_conversions #table-detail tbody').find("#product_unit_id"+no).select2({
                    multiple: false,
                    placeholder: 'Pilih Satuan Product',
                    tags: true,
                    data : arrs
                }).on('change', function (e) {
                    var unit_value = $(this).val();
                    var $this = $(this);
                    var base_unit = $('#product_unit_id').val();
                    $('.product_unit_conversions #table-detail tbody tr').each(function() {
                        console.log('unit_value:'+unit_value);
                        var $no_row = $(this).attr('no');
                        if((unit_value == $(this).find('.unit').val() && $no_row != no) || base_unit == unit_value){
                            console.log('kembar:'+$(this).find('.unit').val());
                            $this.val('').trigger("change");
                            $('.alert-product span').html("Satuan kembar dengan satuan dasar atau satuan konversi lain");
                            $('.alert-product').fadeIn();
                        }

                    });

                });

                if(values != ''){
                    $("#product_unit_id"+no).val(values).trigger('change');
                }

            }

        });
    }

}


function customerCategory_Selectdata(values) {
    var data = $.ajax({
        url: base_url+"/customer-categories/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#customer_category_id").select2({
            multiple: false,
            placeholder: 'Pilih Kategory Customer',
            tags: true,
            data : arrs
        }).on('change', function (e) {

        });
        if(values != ''){
            $("#customer_category_id").val(values).trigger('change');
        }
    });

    if(values != ''){
        $("#customer_category_id").val(values).trigger('change');
    }

}

function product_Selectdata($find, $no, values, type) {
    var data = $.ajax({
        url: base_url+"/products/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $find.find('#product'+$no).select2({
            multiple: false,
            placeholder: 'Pilih Product',
            data : arrs
        }).on('change', function (e) {
            var value = $(this).val();
            var split_val = value.split('##');
            $(this).parent().parent().find('#product_id').val(split_val[0]);
            if(type == 'purchase'){
                $(this).parent().parent().find('.harga_product').val(split_val[4]);
                $(this).parent().parent().find('.price_list').val(split_val[1]);
            } else {
                $(this).parent().parent().find('.hpp').val(split_val[4]);
                $(this).parent().parent().find('.price_list').val(split_val[1]);
                $(this).parent().parent().find('.price').val(split_val[1]);
            }

            calcPrice($(this).parent().parent());

        });
        if(values != 0){
            console.log('values:'+values);
            $find.find('#product'+$no).val(values).trigger('change');
        }

    });
}

function product_customer_Selectdata($find, $no, values, customer_id, unit_id) {
    var data = $.ajax({
        url: base_url+"/products/dataSelect",
        type: "GET",
        data: { customer_id: customer_id }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $find.find('#product'+$no).select2({
            multiple: false,
            placeholder: 'Pilih Product',
            data : arrs
        }).on('change', function (e) {
            var value = $(this).val();
            console.log('change P:'+value);
            console.log('Html P:'+$(this).html());
            if(value != null) {
                var split_val = value.split('##');
                console.log('v:'+value);
                unit_array_Selectdatas($find, $no, unit_id, split_val[6], 1);
                $(this).parent().parent().find('#product_id').val(split_val[0]);
                // $(this).parent().parent().find('.hpp').val(split_val[4]);
                // $(this).parent().parent().find('.price_list').val(split_val[1]);
                calcPrice($(this).parent().parent());
            }

        });
    
        if(values != 0){
            console.log('values Product Customer:'+values);
            $find.find('#product'+$no).val(values).trigger('change');
        }

    });
}

function product_supplier_Selectdata($find, $no, values, supplier_id, unit_id) {
    var data = $.ajax({
        url: base_url+"/products/dataSelect",
        type: "GET",
        data: { supplier_id: supplier_id }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $find.find('#product'+$no).select2({
            multiple: false,
            placeholder: 'Pilih Product',
            data : arrs
        }).on('change', function (e) {
            var value = $(this).val();
            console.log('change P:'+value);
            console.log('Html P:'+$(this).html());
            if(value != null) {
                var split_val = value.split('##');
                console.log('product_supplier_Selectdata:'+value);
                console.log('product_supplier_Selectdata2:'+values);
                unit_array_Selectdatas($find, $no, unit_id, split_val[6], 0);
                $(this).parent().parent().find('#product_id').val(split_val[0]);
                // $(this).parent().parent().find('.harga_product').val(split_val[4]);
                // $(this).parent().parent().find('.price_list').val(split_val[1]);
                calcPrice($(this).parent().parent());
            }
            // $.get(base_url+"/products/get-first", { id: split_val[0]}, function(data, status){
            //     var objop = jQuery.parseJSON(data);
            //     $(this).parent().parent().find('.harga_product').val(split_val[4]);
            //     $(this).parent().parent().find('.price_list').val(split_val[1]);
            //     

            // });

        });
    
        if(values != 0){
            console.log('Value Product Supplier:'+values);
            $find.find('#product'+$no).val(values).trigger('change');
        }

    });
}

function unit_Selectdatas($find, $no, values) {
    var data = $.ajax({
        url: base_url+"/product-units/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $find.find('#unit'+$no).select2({
            multiple: false,
            placeholder: 'Pilih Satuan',
            data : arrs
        }).on('change', function (e) {

        });

        if(values != 0){
            $find.find('#unit'+$no).val(values).trigger('change');
        }

    });
}

function unit_array_Selectdatas($find, $no, values, $arrData, $type) {

        var obj = $arrData.split(',,,,');
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            if(obj[i] != ''){
                var val =  obj[i].split('@@@@');
                arrs.push( {
                    id : val[0] + '#@#' + val[2] + '#@#' + val[3] + '#@#' + val[4],
                    text : val[1]
                } );
            }
        }
        $find.find('#unit'+$no).html('');
        $find.find('#unit'+$no).select2({
            multiple: false,
            placeholder: 'Pilih Satuan',
            data : arrs
        }).on('change', function (e) {
            var value = $(this).val();
            console.log(value);
            console.log('change U:'+value);
            if(value != null) {
                var split_val = value.split('#@#');
                var parent = $(this).parent().parent().parent().parent();
                parent.find('.product_unit_id').val(split_val[0]);
                if($type = 0) {
                    parent.find('.price_list').val(split_val[2]);
                    parent.find('.harga_product').val(split_val[2]);
                } else {
                    parent.find('.hpp').val(split_val[2]);
                    parent.find('.price_list').val(split_val[3]);
                }
                calcPrice(parent);
            }
        });

        if(values != 0){
            console.log('Unit Value:'+values);
            $find.find('#unit'+$no).val(values).trigger('change');
        }
}

function po_Selectdata(values) {
    var data = $.ajax({
        url: base_url+"/purchase/orders/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#purchase_order_id").select2({
            multiple: false,
            placeholder: 'Pilih PO',
            tags: true,
            data : arrs
        }).on('change', function (e) {

            var po =$(this).val();
             $.get(base_url+"/purchase/order/get-first", { id: po}, function(data, status){
                var objop = jQuery.parseJSON(data);
                if(objop['purchase_order_detail'].length > 0){
                    $('#table-detail tbody').html('');

                    supplier_Selectdata(objop['supplier_id']);
                    $('#supplier_id').val(objop['supplier_id']);

                    if(objop['tax'] > 0){
                        $('#on-ppn').prop('checked', true);
                        $('#tax').val(objop['tax']);
                        $(".view-ppn").show();
                        $('.tax .text-right').css('margin', '30px 0px 0px 0px;');
                        $('#no_po').val($('#codes').val());
                        functTotal();
                    } else {
                        $('#on-ppn').prop('checked', false);
                        $('#tax').val('10');
                        $(".view-ppn").hide();
                        $('.tax .text-right').css('margin', '0px 0px 0px 0px;');
                        $('#no_po').val($('#codes_tax').val());
                        functTotal();
                    }

                    for($i=0;$i<objop['purchase_order_detail'].length;$i++){
                        var $obj_product = objop['purchase_order_detail'][$i]['product'];
                        var $obj_detail = objop['purchase_order_detail'][$i];

                        var $units = '';
                        var $unit_value = $obj_detail['product_packaging_id'];
                        var $buy_price = ($obj_product['product_hpp'] != null) ? $obj_product['product_hpp']['hpp'] : 0;
                        var $sale_price = ($obj_product['price_customer'] != null) ? $obj_product['price_customer']['price'] : 0;
                        if($obj_product['product_packaging'].length > 0){
                            for (x=0;x<$obj_product['product_packaging'].length;x++) {
                                var packaging = $obj_product['product_packaging'][x];
                                var $hpp = parseFloat($buy_price) * parseFloat(packaging['qty']);
                                var $price = parseFloat($sale_price) * parseFloat(packaging['qty']);
                                $units += packaging['id'] + '@@@@' + packaging['name'] + '@@@@' + packaging['qty'] + '@@@@' + $hpp + '@@@@' + packaging['price'] + ',,,,';

                              if(packaging['id'] == $obj_detail['product_packaging_id']){
                                    $unit_value = packaging['id'] + '#@#' + packaging['qty'] + '#@#' + $hpp + '#@#' + packaging['price'];
                              }
                            }
                      }

                        var description = ($obj_product['description'] == null) ? '' : $obj_product['description'];
                        var $product = $obj_product['id']+'##'+$sale_price+'##'+$obj_product['code']+'##'+description+'##'+$buy_price+'##'+$obj_product['stock']+'##'+$units;
                        add_row($product, $obj_detail['product_id'], $obj_detail['description'], $obj_detail['qty'], $obj_detail['hpp'], $obj_detail['price'], $obj_detail['discount'], $obj_detail['amount'], $obj_detail['product_unit_id'], $unit_value);
                    }

                }
            });

        });

        if(values != ''){
            $("#purchase_order_id").val(values).trigger('change');
        }
    });

}


function so_Selectdata(values) {
    var data = $.ajax({
        url: base_url+"/sale/orders/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $("#sale_order_id").select2({
            multiple: false,
            placeholder: 'Pilih SO',
            tags: true,
            data : arrs
        }).on('change', function (e) {

            var so =$(this).val();
             $.get(base_url+"/sale/order/get-first", { id: so}, function(data, status){
                var objop = jQuery.parseJSON(data);
                if(objop['sale_order_detail'].length > 0){

                    customer_Selectdata(objop['customer_id']);
                    $('#customer_id').val(objop['customer_id']);
                    salesman_Selectdata(objop['salesman_id']);
                    $('#salesman_id').val(objop['salesman_id']);

                    if(objop['discount'] > 0){
                        $('#on-discount').prop('checked', true);
                        $('.discount #discount').val(objop['discount']);
                        $(".view-discount").show();
                        $('.discount .text-right').css('margin', '30px 0px 0px 0px;');
                        functTotal();
                    } else {
                        $('#on-discount').prop('checked', false);
                        $('#discount').val(0);
                        $(".view-discount").hide();
                        $('.discount .text-right').css('margin', '0px 0px 0px 0px;');
                        functTotal();
                    }

                    console.log('discount2:'+objop['discount2']);
                    if(objop['discount2'] > 0){
                        $('#on-discount2').prop('checked', true);
                        $('.discount2 #discount2').val(objop['discount2']);
                        $(".view-discount2").show();
                        $('.discount2 .text-right').css('margin', '30px 0px 0px 0px;');
                        functTotal();
                    } else {
                        $('#on-discount2').prop('checked', false);
                        $('#discount2').val(0);
                        $(".view-discount2").hide();
                        $('.discount2 .text-right').css('margin', '0px 0px 0px 0px;');
                        functTotal();
                    }

                    if(objop['tax'] > 0){
                        $('#on-ppn').prop('checked', true);
                        $('#tax').val(objop['tax']);
                        $(".view-ppn").show();
                        $('.tax .text-right').css('margin', '30px 0px 0px 0px;');
                        $('#no_po').val($('#codes').val());
                        functTotal();
                    } else {
                        $('#on-ppn').prop('checked', false);
                        $('#tax').val('10');
                        $(".view-ppn").hide();
                        $('.tax .text-right').css('margin', '0px 0px 0px 0px;');
                        $('#no_po').val($('#codes_tax').val());
                        functTotal();
                    }

                    $('#table-detail tbody').html('');

                    // for($i=0;$i<objop['sale_order_detail'].length;$i++){
                    //     var $obj_product = objop['sale_order_detail'][$i]['product'];
                    //     var $obj_detail = objop['sale_order_detail'][$i];
                        
                    //     var $units = '';
                    //     var $unit_value = $obj_detail['product_unit_id'];
                    //     var $buy_price = ($obj_product['product_hpp'] != null) ? $obj_product['product_hpp']['hpp'] : $obj_product['buy_price'];
                    //     var $sale_price = ($obj_product['price_customer'] != null) ? $obj_product['price_customer']['price'] : $obj_product['sale_price'];
                    //        $units += $obj_product['product_unit_id'] + '@@@@' + $obj_product['unit']['name'] + '@@@@1' + '@@@@' + $buy_price + '@@@@' + $sale_price + ',,,,';
                    //     if($obj_detail['product_unit_id'] == $obj_product['product_unit_id']){
                    //         $unit_value = $obj_detail['product_unit_id'] + '#@#' + '1' + '#@#' + $buy_price + '#@#' + $sale_price;
                    //         //val[0] + '#@#' + val[2] + '#@#' + val[3]
                    //     }
                    //     if($obj_product['unit_conversions'].length > 0) {
                    //         for (x=0;x<$obj_product['unit_conversions'].length;x++) {
                    //             var $vUnits = $obj_product['unit_conversions'][x]
                    //             $hpp = parseFloat($buy_price) * parseFloat($vUnits['stock']);
                    //             $price = parseFloat($sale_price) * parseFloat($vUnits['stock']);
                    //             $units += $vUnits['product_unit_id'] + '@@@@' + $vUnits['unit']['name'] + '@@@@' + $vUnits['stock'] + '@@@@' + $hpp + '@@@@' + $price + ',,,,';

                    //           if($vUnits['product_unit_id'] == $obj_detail['product_unit_id']){
                    //                 $unit_value = $vUnits['product_unit_id'] + '#@#' + $vUnits['stock'] + '#@#' + $hpp + '#@#' + $price;
                    //                 //val[0] + '#@#' + val[2] + '#@#' + val[3]
                    //           }
                    //         }
                    //     }

                    //     var description = ($obj_product['description'] == null) ? '' : $obj_product['description'];

                    //     var $product = $obj_product['id']+'##'+$sale_price+'##'+$obj_product['code']+'##'+description+'##'+$buy_price+'##'+$obj_product['stock']+'##'+$units;

                    //     add_row($product, $obj_detail['product_id'], $obj_detail['description'], $obj_detail['qty'], $obj_detail['hpp'], $obj_detail['price'], $obj_detail['discount'], $obj_detail['amount'], $obj_detail['product_unit_id'], $unit_value);
                    // }

                    for($i=0;$i<objop['sale_order_detail'].length;$i++){
                        var $obj_product = objop['sale_order_detail'][$i]['product'];
                        var $obj_detail = objop['sale_order_detail'][$i];

                        var $units = '';
                        var $unit_value = $obj_detail['product_packaging_id'];
                        var $buy_price = ($obj_product['product_hpp'] != null) ? $obj_product['product_hpp']['hpp'] : 0;
                        var $sale_price = ($obj_product['price_customer'] != null) ? $obj_product['price_customer']['price'] : 0;
                        if($obj_product['product_packaging'].length > 0){
                            for (x=0;x<$obj_product['product_packaging'].length;x++) {
                                var packaging = $obj_product['product_packaging'][x];
                                var $hpp = parseFloat($buy_price) * parseFloat(packaging['qty']);
                                var $price = parseFloat($sale_price) * parseFloat(packaging['qty']);
                                $units += packaging['id'] + '@@@@' + packaging['name'] + '@@@@' + packaging['qty'] + '@@@@' + $hpp + '@@@@' + packaging['price'] + ',,,,';

                              if(packaging['id'] == $obj_detail['product_packaging_id']){
                                    $unit_value = packaging['id'] + '#@#' + packaging['qty'] + '#@#' + $hpp + '#@#' + packaging['price'];
                              }
                            }
                      }

                        var description = ($obj_product['description'] == null) ? '' : $obj_product['description'];
                        var $product = $obj_product['id']+'##'+$sale_price+'##'+$obj_product['code']+'##'+description+'##'+$buy_price+'##'+$obj_product['stock']+'##'+$units;
                        add_row($product, $obj_detail['product_id'], $obj_detail['description'], $obj_detail['qty'], $obj_detail['hpp'], $obj_detail['price'], $obj_detail['discount'], $obj_detail['amount'], $obj_detail['product_unit_id'], $unit_value);
                    }

                }
            });

        });

        if(values != ''){
            $("#sale_order_id").val(values).trigger('change');
        }

    });

}

function role_atasan_Selectdata($find,value = 0,filter_id = null) {
    var data = $.ajax({
        url: base_url+"/salesman/dataSelect",
        type: "GET",
        data: {
          role_name : filter_id
        }
    })
    .done(function(data) {

        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }
        $find.find('option').remove();
        $find.select2({
            multiple: false,
            placeholder: 'Pilih Salah Satu',
            tags: false,
            data : arrs
        }).on('change', function (e) {

        });
        if(value != 0){
          $find.val(value).trigger('change');
        }
        
    });

}

function role_salesman_Selectdata($find,$target = null ,value = 0,value_target = 0) {
    $find.select2({
      multiple: false,
      placeholder: 'Pilih Salah Satu',
    }).on('change', function (e) {
      console.log($(this).val());
      if($target != null){
        var role = $(this).val();
        // empty list of target
        $target.find('option').remove();
        if(role == 'manager'){
          $('#role-parent').slideUp();
        }else{
          $('#role-parent').slideDown();
        }
        filter_role = '';
        switch (role) {
          case 'supervisor':
            filter_role = 'manager';
            break;
          case 'sale':
            filter_role = 'supervisor';
            break;
          default:

        }
        // initialize select2 on target
        role_atasan_Selectdata($target,value_target,filter_role);
      }
    });

    if(value != 0){
      $find.val(value).trigger('change');
    }
}


function salesmanArea_Selectdata($find, values = 0) {
    var data = $.ajax({
        url: base_url+"/salesman_area/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $find.select2({
            multiple: false,
            placeholder: 'Pilih Area Salesmen',
            data : arrs
        }).on('change', function (e) {

        });
    });
    if(values != 0){
      $find.val(values).trigger('change');
    }
}

function salesman_Selectdata(values) {
    var data = $.ajax({
        url: base_url+"/salesman/dataSelect",
        type: "GET",
        data: { }
    })
    .done(function(data) {
        var obj = jQuery.parseJSON(data);
        arrs = [];
        arrs.push( {
            id : '',
            text : ''
        } );
        for (var i = 0; i<obj.length; i++) {
            arrs.push( {
                id : obj[i].id,
                text : obj[i].text
            } );
        }

        $('#salesman_id').select2({
            multiple: false,
            placeholder: 'Pilih Salesmen',
            data : arrs
        }).on('change', function (e) {

        });
        if(values != ''){
            $('#salesman_id').val(values).trigger('change');
        }
    });
}


$(document).ready( function() {
    // $("#m_inputmask_7").inputmask("€ 999.999.999", {
    //     numericInput: !0
    // });
    $(".decimal").inputmask();
    $(".limit").inputmask({ "mask": "9", "repeat": 2, "greedy": false });
    $(".mark-phone").inputmask({ "mask": "9", "repeat": 12, "greedy": false });

    $('.close-alert').click(function(e){
        $(this).parent().hide();
    });
});