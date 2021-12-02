import logo from './logo.svg';
import './App.css';
import Header from './components/Header'
import Menu from './components/menu/Menu'
import Items from './components/items/Items'
import Register from './components/register/Register'
import BestSellers from './components/best-seller/BestSellers'
import Login from './components/login/Login'
import Table from './components/table/Table'


function App() {
  return (
    <div className="App">
        <div className="Header">
     <Header />
        </div>
        <div><BestSellers /></div>
        <div><Items /></div>
        <Register />
        <Login />
        {/*<Table />*/}

    </div>
  );
}


export default App;
