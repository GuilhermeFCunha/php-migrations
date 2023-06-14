echo "----- REDE DO POSTGRES -----"

if sudo docker network ls | grep -q ppc_geo_network; then
    echo "----- REDE DO POSTGRES JÁ EXISTE -----"
else
    echo "----- CRIANDO REDE DO POSTGRES -----"
    sudo docker network create --subnet 174.30.0.0/16 ppc_geo_network
fi

echo "----- IMAGEM DO POSTGRES -----"

if sudo docker images | grep -q postgres; then
    echo "----- Imagem Postgres já existe -----"
else
    echo "----- Baixando Imagem Postgres -----"
    sudo docker pull postgres
fi


echo "----- CRIANDO CONTAINER DO POSTGRES -----"

sudo docker run --restart=always --name ppc_geo.db -idt --net ppc_geo_network --ip=174.30.0.3 -e POSTGRES_PASSWORD=toor  -e PGDATA=/var/lib/postgresql/data/pgdata -v ${BASEDIR}/../../db:/var/lib/postgresql/data postgres
