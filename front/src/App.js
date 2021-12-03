import './App.css';
import Header from './components/Header'
import Items from './components/items/Items'
import Register from './components/register/Register'
import BestSellers from './components/best-seller/BestSellers'
import Login from './components/login/Login'
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import Table from './components/table/Table'

function App() {
    return (
        <Router>
            <Switch>
                <div className="App">
                    <div className="Header">
                        <Header/>
                    </div>


                    <Route exact path={'/'}>
                        <div><BestSellers/></div>
                        <div><Items/></div>
                    </Route>


                    <Route exact path={'/login'}>
                        <Login/>
                    </Route>


                    <Route exact path={'/reservez'}>
                        <Table />
                    </Route>

                    <Route exact path={'/register'}>
                        <Register />
                    </Route>

                </div>
            </Switch>
        </Router>
    );
}


export default App;
