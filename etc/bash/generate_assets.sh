cd $(dirname $0)/../../vendor/sylius/sylius && yarn install && yarn gulp;
cd -;
cd $(dirname $0)/../../src/Infrastructure/Ui/Assets && yarn install && yarn gulp;
