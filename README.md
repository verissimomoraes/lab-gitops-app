<<<<<<< HEAD
# Gitops - Wordpress - Mysql

Poc de demonstração de utilização do gitops (pós 2024)

## Requisitos
```
Cluster Kubernetes
Rancher 
Fleet
```

## Estrutura do repositório
```bash
.
├── README.md
├── mysql
│   └── manifest
│       ├── cm-mysql.yaml
│       ├── secret-mysql.yaml
│       ├── statefull-mysql.yaml
│       └── svc-mysql.yaml
└── wordpress
    └── manifest
        ├── cm-wordpress.yaml
        ├── dp-wordpress.yaml
        ├── ing-wordpress.yaml
        ├── pvc-wordpress.yaml
        ├── secret-wordpress.yaml
        └── svc-wordpress.yaml
```
## Utilização
ao comitar os arquivos yaml nas pastas manifest de cada aplicação, será disparado gitops configurado no cluster kubernetes, 
pois estes repos estão configurado no fleet dentro do rancher.

## Contribuição

Template do cluster e suas ferramentas em 
https://github.com/paulovigne/lab-docker-k8s

Cedido generozamente pelo professor Paulo Vigne

=======
# lab-gitops-app
#Todo
#separar os tipos de serviços do yaml
>>>>>>> 88a7bc951a0e1a6f9a75a1c4a784a1a2fb28263f
