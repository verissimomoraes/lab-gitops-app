# Gitops - Wordpress - Mysql
Poc de demonstração de utilização do gitops (pós 2024)
## Requisitos
```
Cluster Kubernetes
Rancher 
Fleet
---
openshift
# oc get pod <your pod name> -o yaml | grep -i serviceAccountName
    serviceAccountName: default

# oc adm policy add-scc-to-user anyuid -z default
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
