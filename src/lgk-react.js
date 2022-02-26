// import React, { Fragment, useEffect, useState } from "react";

const { useState, useEffect, Fragment } = React

function Search() {
    const [show, setShow] = useState(false)
    const [input, setInput] = useState("")

    const handleChange = ({target}) => {
        setInput(target.value)
    }

    const handleUnderlayClick = () => {
        if (input === "") {
            setShow(false)
        }
    }

    useEffect(() => {
        if (show === true) {
            document.getElementById("search-input").focus()
        }
    }, [show])

    useEffect(() => {
        const urlParams = new URLSearchParams(window.location.search)
        const s = urlParams.get("s")
        if (s !== undefined && s !== null && s !== "") {
            setShow(true)
            setInput(s)
        }
    }, [])

    return (
        <div className="search-area">
            <button className="search-toggle header-icon-link has-background has-text-color" aria-label="Search" onClick={() => setShow(true)}>
                <span className="icon-search" />
            </button>

           {show &&
                <Fragment>
                    <div className="dialog appear">
                        <form action="https://blog.lgk.io" method="GET">
                            <button 
                                type="button" 
                                className="search-close secondary has-background has-text-color" 
                                aria-label="Cancel search"
                                onClick={() => setShow(false)}
                            >
                                <span className="icon-close" />
                            </button>
                            <input 
                                id="search-input"
                                name="s"
                                type="text" 
                                value={input} 
                                placeholder="Browse the blog…"
                                onChange={handleChange} 
                                className="form-control"
                            />
                            <button type="submit" className="search-submit has-background has-text-color" aria-label="Search">
                                <span className="icon-search" />
                            </button>
                        </form>
                    </div>

                    {input === "" &&
                        <div className="search-underlay" onClick={handleUnderlayClick} />
                    }
                </Fragment>
            }
        </div>
    )
}

// export default Search

const domContainer = document.getElementById("lgk-react-app")
ReactDOM.render(React.createElement(Search, null), domContainer)