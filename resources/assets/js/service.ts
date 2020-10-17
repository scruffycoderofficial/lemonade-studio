
import 'reflect-metadata';
import { Service } from './core/service';
import DiContainer from "./core/container";

console.log(
    DiContainer
        .resolve<Service>(Service)
            .getEntityNames()
);