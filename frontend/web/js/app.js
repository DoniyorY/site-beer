function initialize_map() {
    for (_map_options = {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: !1,
        disableDefaultUI: !1,
        scrollwheel: !0,
        streetViewControl: !1
    }, _map = new google.maps.Map(document.getElementById("map"), _map_options), _infowindow = new google.maps.InfoWindow, _map_bounds = new google.maps.LatLngBounds, _i = 0; _i < _map_markers.length; _i++) {
        var e = new google.maps.LatLng(_map_markers[_i][2], _map_markers[_i][3]);
        _map_bounds.extend(e), _marker = new google.maps.Marker({
            position: e,
            map: _map,
            icon: "" + _map_markers[_i][1]
        }), google.maps.event.addListener(_marker, "click", function (e, n) {
            return function () {
                _infowindow.setContent(_map_markers[n][0]), _infowindow.open(_map, e)
            }
        }(_marker, _i))
    }
    _map.fitBounds(_map_bounds)
}

var $ = jQuery;
$(document).ready(function () {
    function e() {
        p = !p, o.toggleClass("active"), t.toggleClass("active"), r.toggleClass("active")
    }

    var n = (new Swiper(".slider-container", {
            speed: 400,
            navigation: {nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev"}
        }), new Swiper(".reference-container", {
            speed: 400,
            pagination: {el: ".swiper-pagination", type: "bullets", clickable: !0}
        }), new Swiper(".icon-container", {
            speed: 400,
            pagination: {el: ".swiper-pagination", type: "bullets", clickable: !0}
        }), $(".tab", "#the-menu")), a = $(".card", "#the-menu"), o = $(".main-menu-trigger"), t = $(".navigation.main"),
        i = $(".overlay", t), p = !1, s = $(".go-down"), r = $(".mobile-route"), l = $(".close", ".custom-popup");
    s.on("click", function (e) {
        var n = $(this).parent().next();
        $("html,body").animate({scrollTop: n.offset().top}, 1e3)
    }), o.on("click", function (n) {
        n.preventDefault(), e()
    }), i.on("click", function (n) {
        n.preventDefault(), e()
    }), n.on("click", function (e) {
        e.preventDefault();
        var o = $(this).data("cat"), t = $("#" + o);
        t.hasClass("active") || (n.removeClass("active"), a.removeClass("active"), $(this).addClass("active"), t.addClass("active"))
    }), l.on("click", function (e) {
        e.preventDefault(), $(this).parent().removeClass("show")
    }), $("a").on("click", function (e) {
        if ("" !== this.hash) {
            e.preventDefault();
            var n = this.hash;
            $("html, body").animate({scrollTop: $(n).offset().top}, 800, function () {
                window.location.hash = n
            })
        }
    })
});
var _map, _map_center, _infowindow, _marker, _i, _map_bounds, _map_options;
$(function () {
}), "undefined" != typeof google && google.maps.event.addDomListener(window, "load", initialize_map);