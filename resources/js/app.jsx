import React from 'react';
import ReactDOM from 'react-dom';
import '../css/style.css';  // Убедитесь, что путь правильный


function App() {
    return (
        <div>
            <h1>Искусство азиатской кухни</h1>
        </div>
    );
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
