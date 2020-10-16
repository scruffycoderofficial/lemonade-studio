import { Organisation, Entity } from './dependencies';

export class Service {
    protected organisation: Organisation;
    protected entity: Entity;

    constructor(){
        this.organisation = new Organisation();
        this.entity = new Entity();
    }

    public getEntityTypeItemNames(): string[]{
        return [
            this.organisation.getName(),
            this.entity.getName()
        ];
    }
}