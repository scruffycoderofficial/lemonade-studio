import {Container} from '../../../../node_modules/inversify';
import { Organisation, Entity } from './dependencies';

var DiContainer = new Container();

DiContainer.bind<Organisation>(Organisation).toSelf();
DiContainer.bind<Entity>(Entity).toSelf();

export default DiContainer;