export class Organisation{
    private readonly name: string = 'Acme';

    public getName(): string {
        return this.name;
    }
}

export class Entity{
    private readonly name: string = 'Acme Production';

    public getName(): string {
        return this.name;
    }
}