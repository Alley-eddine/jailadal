import './App.css';
import Header from './components/Header'
import Items from './components/items/Items'
import Register from './components/register/Register'
import BestSellers from './components/best-seller/BestSellers'
import Login from './components/login/Login'
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";

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
                        <Register/>
                    </Route>


                    <Route exact path={'/login'}>
                        <Login/>
                    </Route>


                    {/*<Table />*/}


                </div>
            </Switch>
        </Router>
    );
}


export default App;
