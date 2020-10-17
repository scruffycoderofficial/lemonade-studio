import { inject, injectable } from '../../../../node_modules/inversify';
import { Organisation, Entity } from './dependencies';

@injectable()
export class Service {
    protected organisation: Organisation;
    protected entity: Entity;

    constructor(@inject(Organisation) organisation: Organisation, @inject(Entity) entity: Entity){
       this.organisation = organisation;
       this.entity = entity;
    }

    public getEntityNames(): string[]{
        return [
            this.organisation.getName(),
            this.entity.getName()
        ];
    }
}