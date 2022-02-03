import React from 'react';
import ReactDOM from 'react-dom';
import HallComponent from './HallComponent';

function HallsPage() {


    return (
        <>
            <HallComponent />
        </>
    );
}

export default HallsPage;
if (document.getElementById('halls-page')) {
    ReactDOM.render(<HallsPage />, document.getElementById('halls-page'));
}
