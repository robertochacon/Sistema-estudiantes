import Personas from './components/personas';
import Contacto from './components/contacto';

let routes = [
    {path: '/personas', name:'personas', component: Personas},
    {path: '/contacto', name:'contacto', component: Contacto}
];

export default routes;
