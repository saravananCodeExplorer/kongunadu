import React, { createContext, useContext, useState } from 'react';

const UserContext = createContext();

export default function Example2() {
    const [user] = useState("Saravanan");
    
    return (
        <div>
            <h1>2. Example</h1>
            <UserContext.Provider value={user}>
                <Component1 />
            </UserContext.Provider>
        </div>
    );
}

function Component1() {
    return (
        <div>
            <h2>Component 1</h2>
            <Component2 />
        </div>
    );
}

function Component2() {
    return (
        <div>
            <h2>Component 2</h2>
            <Component3 />
        </div>
    );
}

function Component3() {
    return (
        <div>
            <h2>Component 3</h2>
            <Component4 />
        </div>
    );
}

function Component4() {
    return (
        <div>
            <h2>Component 4</h2>
            <Component5 />
        </div>
    );
}

function Component5() {
    const user = useContext(UserContext);
    return (
        <div>
            <h2>Component 5</h2>
            <h1>{`User name is ${user}`}</h1>
        </div>
    );
}






