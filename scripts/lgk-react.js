var _slicedToArray = function () { function sliceIterator(arr, i) { var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"]) _i["return"](); } finally { if (_d) throw _e; } } return _arr; } return function (arr, i) { if (Array.isArray(arr)) { return arr; } else if (Symbol.iterator in Object(arr)) { return sliceIterator(arr, i); } else { throw new TypeError("Invalid attempt to destructure non-iterable instance"); } }; }();

// import React, { Fragment, useEffect, useState } from "react";

var _React = React,
    useState = _React.useState,
    useEffect = _React.useEffect,
    Fragment = _React.Fragment;


function Search() {
    var _useState = useState(false),
        _useState2 = _slicedToArray(_useState, 2),
        show = _useState2[0],
        setShow = _useState2[1];

    var _useState3 = useState(""),
        _useState4 = _slicedToArray(_useState3, 2),
        input = _useState4[0],
        setInput = _useState4[1];

    var handleChange = function handleChange(_ref) {
        var target = _ref.target;

        setInput(target.value);
    };

    var handleUnderlayClick = function handleUnderlayClick() {
        if (input === "") {
            setShow(false);
        }
    };

    useEffect(function () {
        if (show === true) {
            document.getElementById("search-input").focus();
        }
    }, [show]);

    useEffect(function () {
        var urlParams = new URLSearchParams(window.location.search);
        var s = urlParams.get("s");
        if (s !== undefined && s !== null && s !== "") {
            setShow(true);
            setInput(s);
        }
    }, []);

    return React.createElement(
        "div",
        { className: "search-area" },
        React.createElement(
            "button",
            { className: "search-toggle header-icon-link has-background has-text-color", "aria-label": "Search", onClick: function onClick() {
                    return setShow(true);
                } },
            React.createElement("span", { className: "icon-search" })
        ),
        show && React.createElement(
            Fragment,
            null,
            React.createElement(
                "div",
                { className: "dialog appear" },
                React.createElement(
                    "form",
                    { action: "https://blog.lgk.io", method: "GET" },
                    React.createElement(
                        "button",
                        {
                            type: "button",
                            className: "search-close secondary has-background has-text-color",
                            "aria-label": "Cancel search",
                            onClick: function onClick() {
                                return setShow(false);
                            }
                        },
                        React.createElement("span", { className: "icon-close" })
                    ),
                    React.createElement("input", {
                        id: "search-input",
                        name: "s",
                        type: "text",
                        value: input,
                        placeholder: "Browse the blog\u2026",
                        onChange: handleChange,
                        className: "form-control"
                    }),
                    React.createElement(
                        "button",
                        { type: "submit", className: "search-submit has-background has-text-color", "aria-label": "Search" },
                        React.createElement("span", { className: "icon-search" })
                    )
                )
            ),
            input === "" && React.createElement("div", { className: "search-underlay", onClick: handleUnderlayClick })
        )
    );
}

// export default Search

var domContainer = document.getElementById("lgk-react-app");
ReactDOM.render(React.createElement(Search, null), domContainer);